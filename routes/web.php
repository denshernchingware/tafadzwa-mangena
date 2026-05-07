<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;


Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::get('/all-projects', [PortfolioController::class, 'allProjects'])->name('all-projects');



Route::get('/project/{id}', [PortfolioController::class, 'project']) ->name('project');
