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
Route::get('/admin/projects/create', [AdminController::class, 'createProject'])->name('admin.projects.create')->middleware('admin.auth');
Route::get('/admin/projects/{project}', [AdminController::class, 'showProject'])->name('admin.projects.show')->middleware('admin.auth');
Route::get('/admin/projects/{project}/edit', [AdminController::class, 'editProject'])->name('admin.projects.edit')->middleware('admin.auth');
Route::put('/admin/projects/{project}', [AdminController::class, 'updateProject'])->name('admin.projects.update')->middleware('admin.auth');
Route::post('/admin/projects', [AdminController::class, 'storeProject'])->name('admin.projects.store')->middleware('admin.auth');
Route::delete('/admin/projects/{project}', [AdminController::class, 'destroyProject'])->name('admin.projects.destroy')->middleware('admin.auth');

// Heroes
Route::get('/admin/heroes', [AdminController::class, 'heroes'])->name('admin.heroes')->middleware('admin.auth');
Route::get('/admin/heroes/create', [AdminController::class, 'createHero'])->name('admin.heroes.create')->middleware('admin.auth');
Route::get('/admin/heroes/{hero}', [AdminController::class, 'showHero'])->name('admin.heroes.show')->middleware('admin.auth');
Route::get('/admin/heroes/{hero}/edit', [AdminController::class, 'editHero'])->name('admin.heroes.edit')->middleware('admin.auth');
Route::put('/admin/heroes/{hero}', [AdminController::class, 'updateHero'])->name('admin.heroes.update')->middleware('admin.auth');
Route::post('/admin/heroes', [AdminController::class, 'storeHero'])->name('admin.heroes.store')->middleware('admin.auth');
Route::delete('/admin/heroes/{hero}', [AdminController::class, 'destroyHero'])->name('admin.heroes.destroy')->middleware('admin.auth');

// Abouts
Route::get('/admin/abouts', [AdminController::class, 'abouts'])->name('admin.abouts')->middleware('admin.auth');
Route::get('/admin/abouts/create', [AdminController::class, 'createAbout'])->name('admin.abouts.create')->middleware('admin.auth');
Route::get('/admin/abouts/{about}', [AdminController::class, 'showAbout'])->name('admin.abouts.show')->middleware('admin.auth');
Route::get('/admin/abouts/{about}/edit', [AdminController::class, 'editAbout'])->name('admin.abouts.edit')->middleware('admin.auth');
Route::put('/admin/abouts/{about}', [AdminController::class, 'updateAbout'])->name('admin.abouts.update')->middleware('admin.auth');
Route::post('/admin/abouts', [AdminController::class, 'storeAbout'])->name('admin.abouts.store')->middleware('admin.auth');
Route::delete('/admin/abouts/{about}', [AdminController::class, 'destroyAbout'])->name('admin.abouts.destroy')->middleware('admin.auth');

// Skills
Route::get('/admin/skills', [AdminController::class, 'skills'])->name('admin.skills')->middleware('admin.auth');
Route::get('/admin/skills/create', [AdminController::class, 'createSkill'])->name('admin.skills.create')->middleware('admin.auth');
Route::get('/admin/skills/{skill}', [AdminController::class, 'showSkill'])->name('admin.skills.show')->middleware('admin.auth');
Route::get('/admin/skills/{skill}/edit', [AdminController::class, 'editSkill'])->name('admin.skills.edit')->middleware('admin.auth');
Route::put('/admin/skills/{skill}', [AdminController::class, 'updateSkill'])->name('admin.skills.update')->middleware('admin.auth');
Route::post('/admin/skills', [AdminController::class, 'storeSkill'])->name('admin.skills.store')->middleware('admin.auth');
Route::delete('/admin/skills/{skill}', [AdminController::class, 'destroySkill'])->name('admin.skills.destroy')->middleware('admin.auth');

// Education
Route::get('/admin/education', [AdminController::class, 'education'])->name('admin.education')->middleware('admin.auth');
Route::get('/admin/education/create', [AdminController::class, 'createEducation'])->name('admin.education.create')->middleware('admin.auth');
Route::get('/admin/education/{education}', [AdminController::class, 'showEducation'])->name('admin.education.show')->middleware('admin.auth');
Route::get('/admin/education/{education}/edit', [AdminController::class, 'editEducation'])->name('admin.education.edit')->middleware('admin.auth');
Route::put('/admin/education/{education}', [AdminController::class, 'updateEducation'])->name('admin.education.update')->middleware('admin.auth');
Route::post('/admin/education', [AdminController::class, 'storeEducation'])->name('admin.education.store')->middleware('admin.auth');
Route::delete('/admin/education/{education}', [AdminController::class, 'destroyEducation'])->name('admin.education.destroy')->middleware('admin.auth');

// Experiences
Route::get('/admin/experiences', [AdminController::class, 'experiences'])->name('admin.experiences')->middleware('admin.auth');
Route::get('/admin/experiences/create', [AdminController::class, 'createExperience'])->name('admin.experiences.create')->middleware('admin.auth');
Route::get('/admin/experiences/{experience}', [AdminController::class, 'showExperience'])->name('admin.experiences.show')->middleware('admin.auth');
Route::get('/admin/experiences/{experience}/edit', [AdminController::class, 'editExperience'])->name('admin.experiences.edit')->middleware('admin.auth');
Route::put('/admin/experiences/{experience}', [AdminController::class, 'updateExperience'])->name('admin.experiences.update')->middleware('admin.auth');
Route::post('/admin/experiences', [AdminController::class, 'storeExperience'])->name('admin.experiences.store')->middleware('admin.auth');
Route::delete('/admin/experiences/{experience}', [AdminController::class, 'destroyExperience'])->name('admin.experiences.destroy')->middleware('admin.auth');

// Contacts

Route::get('/admin/contacts/create', [AdminController::class, 'createContact'])->name('admin.contacts.create')->middleware('admin.auth');
Route::get('/admin/contacts/{contact}', [AdminController::class, 'showContact'])->name('admin.contacts.show')->middleware('admin.auth');
Route::get('/admin/contacts/{contact}/edit', [AdminController::class, 'editContact'])->name('admin.contacts.edit')->middleware('admin.auth');
Route::put('/admin/contacts/{contact}', [AdminController::class, 'updateContact'])->name('admin.contacts.update')->middleware('admin.auth');
Route::post('/admin/contacts/store', [AdminController::class, 'storeContact'])->name('admin.contacts.store')->middleware('admin.auth');
Route::delete('/admin/contacts/{contact}', [AdminController::class, 'destroyContact'])->name('admin.contacts.destroy')->middleware('admin.auth');
Route::get('/admin/contacts', [AdminController::class, 'contacts'])->name('admin.contacts')->middleware('admin.auth');

// Project Items
Route::get('/admin/project-items', [AdminController::class, 'projectItems'])->name('admin.project-items')->middleware('admin.auth');
Route::get('/admin/project-items/create', [AdminController::class, 'createProjectItem'])->name('admin.project-items.create')->middleware('admin.auth');
Route::get('/admin/project-items/{projectItem}', [AdminController::class, 'showProjectItem'])->name('admin.project-items.show')->middleware('admin.auth');
Route::get('/admin/project-items/{projectItem}/edit', [AdminController::class, 'editProjectItem'])->name('admin.project-items.edit')->middleware('admin.auth');
Route::put('/admin/project-items/{projectItem}', [AdminController::class, 'updateProjectItem'])->name('admin.project-items.update')->middleware('admin.auth');
Route::post('/admin/project-items', [AdminController::class, 'storeProjectItem'])->name('admin.project-items.store')->middleware('admin.auth');
Route::delete('/admin/project-items/{projectItem}', [AdminController::class, 'destroyProjectItem'])->name('admin.project-items.destroy')->middleware('admin.auth');

// Project Details
Route::get('/admin/project-details', [AdminController::class, 'projectDetails'])->name('admin.project-details')->middleware('admin.auth');
Route::get('/admin/project-details/create', [AdminController::class, 'createProjectDetail'])->name('admin.project-details.create')->middleware('admin.auth');
Route::get('/admin/project-details/{projectDetail}', [AdminController::class, 'showProjectDetail'])->name('admin.project-details.show')->middleware('admin.auth');
Route::get('/admin/project-details/{projectDetail}/edit', [AdminController::class, 'editProjectDetail'])->name('admin.project-details.edit')->middleware('admin.auth');
Route::put('/admin/project-details/{projectDetail}', [AdminController::class, 'updateProjectDetail'])->name('admin.project-details.update')->middleware('admin.auth');
Route::post('/admin/project-details', [AdminController::class, 'storeProjectDetail'])->name('admin.project-details.store')->middleware('admin.auth');
Route::delete('/admin/project-details/{projectDetail}', [AdminController::class, 'destroyProjectDetail'])->name('admin.project-details.destroy')->middleware('admin.auth');
