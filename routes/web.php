<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('front.login');
})->name('login');

Route::get('/register', function () {
    return view('front.register');
})->name('register');

Route::get('/', function () {
    return view('front.home');
})->name('home');
