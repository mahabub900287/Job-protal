<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JobPostController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\New\AdminController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\RolePermission\RolePermissionController;


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile/{id}', [AdminProfileController::class, 'profileEdit'])->name('profile.edit');
    Route::post('/profile/update/{id}', [AdminProfileController::class, 'profileupdate'])->name('profile.update');
    //user
    Route::resource('users', UserController::class);
    Route::resource('/job-post', JobPostController::class);
    Route::controller(SettingsController::class)->group(function () {
        Route::get('/job-application-list', 'index')->name('application.list');
        Route::delete('/job-application-delete/{id}', 'destroy')->name('application.delete');
    });
});
