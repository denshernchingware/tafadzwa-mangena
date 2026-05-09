<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::get('/all-projects', [PortfolioController::class, 'allProjects'])->name('all-projects');

Route::get('/project/{id}', [PortfolioController::class, 'project']) ->name('project');

Route::get('/download-cv', [SecurityController::class, 'downloadCv'])->name('download-cv');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/mangena', [AdminController::class, 'dashboard'])->name('admin.mangena')->middleware('admin.auth');

// Projects
Route::get('/admin/projects', [AdminController::class, 'projects'])->name('admin.projects')->middleware('admin.auth');
Route::get('/admin/projects/{project}', [AdminController::class, 'showProject'])->name('admin.projects.show')->middleware('admin.auth');
Route::get('/admin/projects/{project}/edit', [AdminController::class, 'editProject'])->name('admin.projects.edit')->middleware('admin.auth');

// Heroes
Route::get('/admin/heroes', [AdminController::class, 'heroes'])->name('admin.heroes')->middleware('admin.auth');
Route::get('/admin/heroes/{hero}', [AdminController::class, 'showHero'])->name('admin.heroes.show')->middleware('admin.auth');
Route::get('/admin/heroes/{hero}/edit', [AdminController::class, 'editHero'])->name('admin.heroes.edit')->middleware('admin.auth');

// Abouts
Route::get('/admin/abouts', [AdminController::class, 'abouts'])->name('admin.abouts')->middleware('admin.auth');
Route::get('/admin/abouts/{about}', [AdminController::class, 'showAbout'])->name('admin.abouts.show')->middleware('admin.auth');
Route::get('/admin/abouts/{about}/edit', [AdminController::class, 'editAbout'])->name('admin.abouts.edit')->middleware('admin.auth');

// Skills
Route::get('/admin/skills', [AdminController::class, 'skills'])->name('admin.skills')->middleware('admin.auth');
Route::get('/admin/skills/{skill}', [AdminController::class, 'showSkill'])->name('admin.skills.show')->middleware('admin.auth');
Route::get('/admin/skills/{skill}/edit', [AdminController::class, 'editSkill'])->name('admin.skills.edit')->middleware('admin.auth');

// Education
Route::get('/admin/education', [AdminController::class, 'education'])->name('admin.education')->middleware('admin.auth');
Route::get('/admin/education/{education}', [AdminController::class, 'showEducation'])->name('admin.education.show')->middleware('admin.auth');
Route::get('/admin/education/{education}/edit', [AdminController::class, 'editEducation'])->name('admin.education.edit')->middleware('admin.auth');

// Experiences
Route::get('/admin/experiences', [AdminController::class, 'experiences'])->name('admin.experiences')->middleware('admin.auth');
Route::get('/admin/experiences/{experience}', [AdminController::class, 'showExperience'])->name('admin.experiences.show')->middleware('admin.auth');
Route::get('/admin/experiences/{experience}/edit', [AdminController::class, 'editExperience'])->name('admin.experiences.edit')->middleware('admin.auth');

// Contacts
Route::get('/admin/contacts', [AdminController::class, 'contacts'])->name('admin.contacts')->middleware('admin.auth');
Route::get('/admin/contacts/{contact}', [AdminController::class, 'showContact'])->name('admin.contacts.show')->middleware('admin.auth');
Route::get('/admin/contacts/{contact}/edit', [AdminController::class, 'editContact'])->name('admin.contacts.edit')->middleware('admin.auth');

// Project Items
Route::get('/admin/project-items', [AdminController::class, 'projectItems'])->name('admin.project-items')->middleware('admin.auth');
Route::get('/admin/project-items/{projectItem}', [AdminController::class, 'showProjectItem'])->name('admin.project-items.show')->middleware('admin.auth');
Route::get('/admin/project-items/{projectItem}/edit', [AdminController::class, 'editProjectItem'])->name('admin.project-items.edit')->middleware('admin.auth');

// Project Details
Route::get('/admin/project-details', [AdminController::class, 'projectDetails'])->name('admin.project-details')->middleware('admin.auth');
Route::get('/admin/project-details/{projectDetail}', [AdminController::class, 'showProjectDetail'])->name('admin.project-details.show')->middleware('admin.auth');
Route::get('/admin/project-details/{projectDetail}/edit', [AdminController::class, 'editProjectDetail'])->name('admin.project-details.edit')->middleware('admin.auth');