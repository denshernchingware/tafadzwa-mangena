<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;

Route::post('/chat', [ChatbotController::class, 'chat']);
Route::get('/chat/history', [ChatbotController::class, 'history']);