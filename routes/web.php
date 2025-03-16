<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\LayananController;
use App\Http\Controllers\admin\PaketController;
use App\Http\Controllers\admin\SettingWebController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;

// Authentication
Route::get('/auth/login', [AuthController::class, 'index'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login']);


// Admin
Route::middleware('auth')->name('admin.')->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    //Paket Internet
    Route::get('admin/paket-internet', [PaketController::class, 'index'])->name('paket-internet.index');
    Route::post('admin/paket-internet', [PaketController::class, 'store'])->name('paket-internet.store');
    Route::put('admin/paket-internet', [PaketController::class, 'update'])->name('paket-internet.update');
    Route::delete('admin/paket-internet/{id}', [PaketController::class, 'destroy'])->name('paket-internet.delete');

    //Layanan
    Route::get('admin/layanan', [LayananController::class, 'index'])->name('layanan.index');
    Route::post('admin/layanan', [LayananController::class, 'store'])->name('layanan.store');
    Route::put('admin/layanan', [LayananController::class, 'update'])->name('layanan.update');
    Route::delete('admin/layanan/{id}', [LayananController::class, 'destroy'])->name('layanan.delete');

    //FAQ
    Route::get('admin/faq', [FaqController::class, 'index'])->name('faq.index');
    Route::post('admin/faq', [FaqController::class, 'store'])->name('faq.store');
    Route::put('admin/faq', [FaqController::class, 'update'])->name('faq.update');
    Route::delete('admin/faq/{id}', [FaqController::class, 'destroy'])->name('faq.delete');

    //Setting Web
    Route::get('admin/setting-web', [SettingWebController::class, 'index'])->name('setting-web.index');
    Route::put('admin/setting-web', [SettingWebController::class, 'store'])->name('setting-web.update');

    // Profile n Logout
    Route::get('/auth/profile', [AuthController::class, 'profile'])->name('profile');
    Route::get('/auth/profile/edit', [AuthController::class, 'profileEdit'])->name('profile.edit');
    Route::put('/auth/profile/update', [AuthController::class, 'profileUpdate'])->name('profile.update');

    Route::post('/logout', [App\Http\Controllers\auth\AuthController::class, 'logout'])->name('logout');
});

Route::get('/', [FrontEndController::class, 'landing'])->name('home');
Route::get('/paket', [FrontEndController::class, 'paket'])->name('paket');
Route::get('/service', [FrontEndController::class, 'service'])->name('service');
Route::get('/faq', [FrontEndController::class, 'faq'])->name('faq');
Route::post('/faq/search', [FrontEndController::class, 'searchFAQ'])->name('faq.search');
Route::get('/contact-us', [FrontEndController::class, 'contactUs'])->name('contact');

// Fallback
Route::fallback(function () {
    return redirect()->route('home');
});
