<?php

use App\Http\Controllers\AdminController;
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


// Admin Dashboard Middleware Group Routes List
Route::prefix('admin')->group(function () {

    // Admin Dashboard
    Route::controller(AdminController::class)->group(function(){
        Route::get('/dashboard', 'index')->name('admin.dashboard');
        Route::view('/profile','pages.dashboard.admin.profile')->name('admin.profile');
        Route::get('/company', 'companyPage')->name('admin.company');
        Route::get('/job', 'jobPage')->name('admin.job');
        Route::get('/employee', 'employeePage')->name('admin.employee');

        Route::get('/blog', 'blogPage')->name('admin.blog');
        Route::get('/blog/categories', 'blogCategoryPage')->name('admin.blog.categories');

        Route::get('/page', 'adminPage')->name('admin.frontendPage');
        Route::get('/page/home', 'homePageEdit')->name('admin.frontend.home.edit');
        Route::get('/page/about', 'aboutPageEdit')->name('admin.frontend.about.edit');
        Route::get('/page/job', 'jobPageEdit')->name('admin.frontend.job.edit');
        Route::get('/page/blog', 'blogPageEdit')->name('admin.frontend.blog.edit');
        Route::get('/page/contact', 'contactPageEdit')->name('admin.frontend.contact.edit');

        Route::get('/plugin', 'pluginPage')->name('admin.plugin');

    }); // End Admin Controller Routes

}); // End Admin Group Middleware Routes


// Web API Routes
