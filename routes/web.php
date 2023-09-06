<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/admin', function () {
    return view('backend.dashboard');
});

Route::get('/users', function () {
    return view('backend.users');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/category_list', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category_create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category_edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category_update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete_update/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    // Report
    Route::get('/category_pdf_report', [ReportController::class, 'categoryReport'])->name('category.report');
    Route::get('/category_excel_report', [ReportController::class, 'categoryExcelReport'])->name('category.excel_report');
});

require __DIR__ . '/auth.php';