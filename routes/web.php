<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SecurityController;


Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::get('/all-projects', [PortfolioController::class, 'allProjects'])->name('all-projects');



Route::get('/project/{id}', [PortfolioController::class, 'project']) ->name('project');

Route::get('/download-cv', [SecurityController::class, 'downloadCv'])->name('download-cv');
