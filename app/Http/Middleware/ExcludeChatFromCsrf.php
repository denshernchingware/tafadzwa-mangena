<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExcludeChatFromCsrf
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('chat') || $request->is('chat/*')) {
            return $next($request);
        }

        return response()->json(['message' => 'CSRF token mismatch'], 419);
    }
}