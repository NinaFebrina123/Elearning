<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);
// route untuk menampilkan halaman student
Route::get('admin/student', [StudentController::class, 'index']);