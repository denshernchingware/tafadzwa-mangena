<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SecurityController extends Controller
{
    public function downloadCv()
    {
        $contact = Contact::first();

        if (!$contact || !$contact->cv) {
            abort(404, 'CV not found.');
        }

        $filePath = storage_path('app/public/' . $contact->cv);

        if (!file_exists($filePath)) {
            abort(404, 'CV file not found.');
        }

        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        $allowedExtensions = ['pdf', 'doc', 'docx'];

        if (!in_array(strtolower($extension), $allowedExtensions)) {
            abort(403, 'Invalid file type.');
        }

        $fileSize = filesize($filePath);
        $maxSize = 10 * 1024 * 1024; // 10MB

        if ($fileSize > $maxSize) {
            abort(413, 'File size exceeds limit.');
        }

        $filename = 'Tafadzwa_Mangena_CV.' . $extension;

        return response()->download($filePath, $filename);
    }
}