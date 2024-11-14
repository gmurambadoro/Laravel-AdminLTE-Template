<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::view('/', view('home'))->name('home');
    Route::view('/profile', 'profile')->name('profile');
});

/*
 * Logout route accessible via GET
 */
Route::get('/sign-out', function () {
    Auth::logout();

    return redirect()->route('login');
})->name('sign-out');
