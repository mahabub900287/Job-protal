<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\JobPostController;
use App\Http\Controllers\Frontend\JobApplyController;
use App\Http\Controllers\Frontend\JobApplicationController;

Route::get('/', [\App\Http\Controllers\Frontend\DashboardController::class, 'index'])->name('home');
Route::get('/all-category', [\App\Http\Controllers\Frontend\DashboardController::class, 'allCategory'])->name('all.category');
Route::get('/all-job', [\App\Http\Controllers\Frontend\DashboardController::class, 'allJob'])->name('all.job');
Route::get('/job-details', [\App\Http\Controllers\Frontend\DashboardController::class, 'jobDetails'])->name('job.details');
Route::get('/job-apply/{id}', [\App\Http\Controllers\Frontend\DashboardController::class, 'jobApply'])->name('job.apply');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [HomeController::class, 'userProfile'])->name('profile.index');
    Route::resource('/apply-job', JobApplyController::class)->except('show');
    Route::post('/apply-job/store', [JobApplicationController::class, 'store'])->name('apply-job.store');
});

Route::match(['get', 'post'], '/logout', function () {
    Auth::logout();
    // Additional logic if needed
});



require __DIR__ . '/auth.php';
