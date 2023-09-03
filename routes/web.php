<?php

use App\Http\Controllers\CategoryController;
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


Route::get('/category_list', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category_create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category_edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category_update/{id}', [CategoryController::class, 'update'])->name('category.update');