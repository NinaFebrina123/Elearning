<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
   // menampilkan data courses dari db 
    public function index(){
    // mendapatkan data dari table courses
     $courses = Courses::all();

    // Kirim data ke view untuk ditampilkan
    return view('admin.contents.courses.index', [
        'courses' => $courses
    ]); 
    
    }
}

