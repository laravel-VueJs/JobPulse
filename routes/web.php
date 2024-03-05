<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\BlogController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Web API Routes
Route::post('/user-registration',[UserController::class,'UserRegistration']);
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::get('/user-profile',[UserController::class,'UserProfile'])->middleware('auth:sanctum');
Route::get('/logout',[UserController::class,'UserLogout'])->middleware('auth:sanctum');
Route::post('/send-otp',[UserController::class,'SendOTPCode']);
Route::post('/verify-otp',[UserController::class,'VerifyOTP']);
Route::post('/reset-password',[UserController::class,'ResetPassword'])->middleware('auth:sanctum');
Route::post('/user-update',[UserController::class,'UpdateProfile'])->middleware('auth:sanctum');

// Candidate Web API Routes
// Profile
Route::post('/candidate-profile-create-update',[CandidateController::class,'CandidateProfileCreateUpdate'])->middleware('auth:sanctum');
Route::get('/candidate-profile',[CandidateController::class,'CandidateProfile'])->middleware('auth:sanctum');
Route::get('/candidate-profile-info',[CandidateController::class,'CandidateProfileInfo'])->middleware('auth:sanctum');
// Education
Route::post('/candidate-education-create',[CandidateController::class,'CandidateEducationCreate'])->middleware('auth:sanctum');
Route::get('/candidate-education-profile',[CandidateController::class,'CandidateEducationProfile'])->middleware('auth:sanctum');
Route::post('/candidate-education-update/{id}',[CandidateController::class,'CandidateEducationUpdate'])->middleware('auth:sanctum');
Route::post('/candidate-education-delete/{id}',[CandidateController::class,'CandidateEducationDelete'])->middleware('auth:sanctum');
// Training
Route::post('/candidate-training-create',[CandidateController::class,'CandidateTrainingCreate'])->middleware('auth:sanctum');
Route::get('/candidate-training-profile',[CandidateController::class,'CandidateTrainingProfile'])->middleware('auth:sanctum');
Route::post('/candidate-training-update/{id}',[CandidateController::class,'CandidateTrainingUpdate'])->middleware('auth:sanctum');
Route::post('/candidate-training-delete/{id}',[CandidateController::class,'CandidateTrainingDelete'])->middleware('auth:sanctum');
// Experience
Route::post('/candidate-experience-create',[CandidateController::class,'CandidateExperienceCreate'])->middleware('auth:sanctum');
Route::get('/candidate-experience-profile',[CandidateController::class,'CandidateExperienceProfile'])->middleware('auth:sanctum');
Route::post('/candidate-experience-update/{id}',[CandidateController::class,'CandidateExperienceUpdate'])->middleware('auth:sanctum');
Route::post('/candidate-experience-delete/{id}',[CandidateController::class,'CandidateExperienceDelete'])->middleware('auth:sanctum');
// Other Information
Route::post('/candidate-other-information-create',[CandidateController::class,'CandidateOtherInformationCreate'])->middleware('auth:sanctum');
Route::get('/candidate-other-information-profile',[CandidateController::class,'CandidateOtherInformationProfile'])->middleware('auth:sanctum');
Route::post('/candidate-other-information-update/{id}',[CandidateController::class,'CandidateOtherInformationUpdate'])->middleware('auth:sanctum');
Route::post('/candidate-other-information-delete/{id}',[CandidateController::class,'CandidateOtherInformationDelete'])->middleware('auth:sanctum');
// Social Link
Route::post('/candidate-social-link-create',[CandidateController::class,'CandidateSocialLinkCreate'])->middleware('auth:sanctum');
Route::get('/candidate-social-link-profile',[CandidateController::class,'CandidateSocialLinkProfile'])->middleware('auth:sanctum');
Route::post('/candidate-social-link-update/{id}',[CandidateController::class,'CandidateSocialLinkUpdate'])->middleware('auth:sanctum');
Route::post('/candidate-social-link-delete/{id}',[CandidateController::class,'CandidateSocialLinkDelete'])->middleware('auth:sanctum');

// Auth Page Routes
Route::view('/login','pages.auth.login')->name('login');
Route::view('/register','pages.auth.registration')->name('register');
Route::view('/sendOtp','pages.auth.send-otp')->name('sendOtp');
Route::view('/verifyOtp','pages.auth.verify-otp')->name('verifyOtp');
Route::view('/resetPassword','pages.auth.reset-pass')->name('resetPassword');

// Page Routes
Route::view('/', 'pages.frontend.home')->name('home');
Route::view('/about', 'pages.frontend.about')->name('about');
Route::view('/job', 'pages.frontend.job')->name('job');
Route::view('/blog', 'pages.frontend.blog')->name('blog');
Route::view('/contact', 'pages.frontend.contact')->name('contact');

// Pages read and update routes
Route::get('/page-home-read', [HomeController::class,'HomePageRead']);
Route::post('/page-home-update', [HomeController::class,'HomePageUpdate'])->middleware(['auth:sanctum']);
Route::get('/page-about-read', [AboutController::class,'AboutPageRead']);
Route::post('/page-about-update', [AboutController::class,'AboutPageUpdate'])->middleware(['auth:sanctum']);
Route::get('/page-job-read', [JobController::class,'JobPageRead']);
Route::post('/page-job-update', [JobController::class,'JobPageUpdate'])->middleware(['auth:sanctum']);
Route::get('/page-blog-read', [BlogController::class,'BlogPageRead']);
Route::post('/page-blog-update', [BlogController::class,'BlogPageUpdate'])->middleware(['auth:sanctum']);

/*
|--------------------------------------------------------------------------
| Admin Dashboard Middleware Group Routes List
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {

    // Admin Dashboard
    Route::controller(AdminController::class)->group(function(){
        Route::view('/dashboard', 'pages.dashboard.admin.index')->name('admin.dashboard');
        Route::view('/profile','pages.dashboard.admin.profile')->name('admin.profile');
        Route::view('/company', 'pages.dashboard.admin.company')->name('admin.company');
        Route::view('/job', 'pages.dashboard.admin.job')->name('admin.job');
        Route::view('/employee', 'pages.dashboard.admin.employee')->name('admin.employee');

        Route::view('/blog', 'pages.dashboard.admin.blog')->name('admin.blog');
        Route::view('/blog/categories', 'pages.dashboard.admin.blog-category')->name('admin.blog.categories');

        Route::view('/page', 'pages.dashboard.admin.frontendPage.summary')->name('admin.frontendPage');
        Route::view('/page/home', 'pages.dashboard.admin.frontendPage.home')->name('admin.frontend.home.edit');
        Route::view('/page/about', 'pages.dashboard.admin.frontendPage.about')->name('admin.frontend.about.edit');
        Route::view('/page/job', 'pages.dashboard.admin.frontendPage.job')->name('admin.frontend.job.edit');
        Route::view('/page/blog', 'pages.dashboard.admin.frontendPage.blog')->name('admin.frontend.blog.edit');
        Route::view('/page/contact', 'pages.dashboard.admin.frontendPage.contact')->name('admin.frontend.contact.edit');

        Route::view('/plugin', 'pages.dashboard.admin.plugin')->name('admin.plugin');

    }); // End Admin Controller Routes

}); // End Admin Group Middleware Routes


