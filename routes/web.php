<?php

use App\Http\Controllers\Pages\HomeController;
use Illuminate\Support\Facades\Route;

// Page Routes
Route::get('/', [HomeController::class,'index'])->name('home');
Route::view('/userProfile','pages.dashboard.admin.profile')->name('userProfile');


// Web API Routes
