<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Pages
Route::get('/', [HomeController::class, 'page'])->name('home');
Route::get('/contact', [ContactController::class, 'page'])->name('contact');
Route::get('/resume', [ResumeController::class, 'page'])->name('resume');
Route::get('/project', [ProjectController::class, 'page'])->name('project');



// Page Data Controller
Route::get('/heroproperties', [HomeController::class, 'heroProperties']);
Route::get('/aboutMe', [HomeController::class, 'aboutMe']);
Route::get('/socialLink', [HomeController::class, 'socialLink']);
Route::get('/resumeLink', [ResumeController::class, 'resume']);
Route::get('/experences', [ResumeController::class, 'allExperences']);
Route::get('/educations', [ResumeController::class, 'allEducations']);
Route::get('/skills', [ResumeController::class, 'skills']);
Route::get('/languages', [ResumeController::class, 'languages']);
Route::get('/projects', [ProjectController::class, 'projects']);
