<?php

use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\BlogController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\JobController;
use Illuminate\Support\Facades\Route;

// Page Routes
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [AboutController::class,'aboutPage'])->name('about');
Route::get('/job', [JobController::class,'jobPage'])->name('job');
Route::get('/blog', [BlogController::class,'blogPage'])->name('blog');
Route::get('/contact', [ContactController::class,'contactPage'])->name('contact');


// Admin Routes
Route::view('/userProfile','pages.dashboard.admin.profile')->name('userProfile');


// Web API Routes
