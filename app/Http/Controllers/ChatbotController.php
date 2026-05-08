<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\ChatbotConversation;

class ChatbotController extends Controller
{
    public function chat(Request $request)
    {
        dd($request);
        $message = $request->input('message');
        $history = $request->input('history', []);
        $sessionId = $request->header('X-Session-ID') ?? 'session_' . time();

        $apiKey = config('services.groq.api_key');

        $systemPrompt = "You are the AI assistant for Tafadzwa Mangena's portfolio website.

About Tafadzwa Mangena:
- He's a data analyst who turns messy business data into clear, actionable insights
- Has a strong foundation in SQL, Python, and dashboard design
- Helps teams spot trends, optimize campaigns, and make decisions with confidence
- Works across marketing, product, and operations to build reports, automate analytics workflows

Skills:
- Data cleaning, statistical analysis, and predictive modeling
- Experienced with Excel, Pandas, Tableau/Power BI, and data visualization
- Passionate about translating numbers into business strategy

Contact: Phone +263456789, Location Nairobi Kenya

Be helpful, concise, and friendly.";

        $messages = [
            ['role' => 'system',
            'content' => $systemPrompt
            ],
        ];

        foreach ($history as $msg) {
            $messages[] = ['role' => $msg['role'], 'content' => $msg['content']];
        }

        $messages[] = ['role' => 'user', 'content' => $message];

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
            ])->timeout(30)->post('https://api.groq.com/openai/v1/chat/completions', [
                'model' => 'llama-3.3-70b-versatile',
                'max_tokens' => 1000,
                'temperature' => 0.7,
                'messages' => $messages,
            ]);

            if ($response->successful()) {
                $data = $response->json();
                $reply = $data['choices'][0]['message']['content'] ?? 'Sorry, I had a hiccup. Please try again.';

                // Save conversation to database
                ChatbotConversation::create([
                    'session_id' => $sessionId,
                    'user_message' => $message,
                    'bot_reply' => $reply,
                ]);

                return response()->json(['reply' => $reply]);
            } else {
                return response()->json(['reply' => 'API error: ' . $response->status() . ' - ' . $response->body()], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['reply' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function history(Request $request)
    {
        $sessionId = $request->session()->getId() ?? 'guest_' . time();
        $conversations = ChatbotConversation::where('session_id', $sessionId)
            ->orderBy('created_at', 'asc')
            ->get();
        return response()->json(['conversations' => $conversations]);
    }
}
