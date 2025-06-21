<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('front.login');
});

Route::get('/register', function () {
    return view('front.register');
});

Route::get('/', function () {
    return view('front.home');
});
