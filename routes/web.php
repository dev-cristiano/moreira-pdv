<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::group(['middleware' => 'api.jwt'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard')->name('dashboard');
    });
});