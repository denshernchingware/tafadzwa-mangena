<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\ChatbotController;


Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::get('/all-projects', [PortfolioController::class, 'allProjects'])->name('all-projects');



Route::get('/project/{id}', [PortfolioController::class, 'project']) ->name('project');

Route::get('/download-cv', [SecurityController::class, 'downloadCv'])->name('download-cv');

// Route::post('/chat', [ChatbotController::class, 'chat'])->name('chat');

// Route::get('/chat/history', [ChatbotController::class, 'history'])->name('chat.history');