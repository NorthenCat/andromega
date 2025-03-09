<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('LandingPage');
})->name('home');
Route::get('/faq', function () {
    return view('FaqPage');
})->name('faq');;
Route::get('/paket', function () {
    return view('PaketLayananPage');
})->name('paket');
Route::get('/contact', function () {
    return view('ContactUsPage');
})->name('contact');
