<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', fn() => view('home'))
        ->name('home');
});

/*
 * Logout route accessible via GET
 */
Route::get('/logout', function() {
    Auth::logout();

    return redirect()->route('login');
})->name('sign-out');
