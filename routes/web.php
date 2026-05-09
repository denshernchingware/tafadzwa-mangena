<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::get('/all-projects', [PortfolioController::class, 'allProjects'])->name('all-projects');

Route::get('/project/{id}', [PortfolioController::class, 'project']) ->name('project');

Route::get('/download-cv', [SecurityController::class, 'downloadCv'])->name('download-cv');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/mangena', [PortfolioController::class, 'admin'])->name('admin.mangena')->middleware('admin.auth');