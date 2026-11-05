<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;
use Illuminate\Support\Facades\Route;


// Route publik
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/layout', function () {
    return view('layout');
});

// Route admin (pakai prefix & name)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('about', [AboutController::class, 'index'])->name('about');

    Route::get('/student', [StudentController::class, 'index'])->name('student');

    Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom');
});
