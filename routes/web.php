<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);
// route untuk menampilkan halaman student
Route::get('admin/student', [StudentController::class, 'index']);

// route untuk menampilkan halaman student
Route::get('admin/courses', [CoursesController::class, 'index']);

// route untuk menampilkan halaman form tambah student
Route::get('admin/student/create', [StudentController::class, 'create']);

// route untuk mengirim data student
Route::post('admin/student/store',  [StudentController::class, 'store']);

// route untuk menampilkan halaman form edit student
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

// route untuk menyimpan hasil update student
Route::put('admin/student/update/{id}', [StudentController::class, 'update']);