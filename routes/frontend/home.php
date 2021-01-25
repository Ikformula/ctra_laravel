<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\LicenseRegController;
use App\Http\Controllers\LicenseRenewalController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('print-reg', [LicenseRegController::class, 'printRegistration'])->name('print.reg');
/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });

    Route::get('licence/register', [LicenseRegController::class, 'regForm'])->name('licence.reg.form');
    Route::post('licence/register', [LicenseRegController::class, 'storeReg'])->name('licence.reg.store');

    Route::post('licence/renew', [LicenseRenewalController::class, 'renew'])->name('licence.renew.store');

    Route::get('single-reg', [LicenseRegController::class, 'singleRegistration'])->name('search.reg');
    Route::get('registrations', [LicenseRenewalController::class, 'regList'])->name('reg.list');

    Route::post('get-for-date', [LicenseRenewalController::class, 'getForDate'])->name('get.for.date');
});
