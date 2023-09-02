<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view('backend.dashboard');
});

Route::get('/users', function () {
    return view('backend.users');
});