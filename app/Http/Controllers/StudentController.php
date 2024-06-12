<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // method untuk menampilkan data student
    public function index()
    {
        // tarik data dari db
       $students= Student::all();

       // panggil view dan kirim data students
     return view('admin.contents.student.index', [
        'students'=>$students,
    ]);
    
    } 
    
    // method untuk menampilkan form tambah student
    public function create()
    {

        // mendapatkan data courses
        $courses = Courses::all();

        //panggil view
        return view('admin.contents.student.create',[
            'courses' => $courses,
        ]);
    }

    // method untuk menyimpan data student baru
    public function store(Request $request)
    {
        // validasi data yang diterima
        $request->validate([
            'name'=> 'required',
            'nim'=> 'required|numeric',
            'major'=> 'required',
            'class'=> 'required',
            'courses_id' => 'nullable'
        ]);

        // simpan data ke db
        Student::create([
            'name'=> $request->name,
            'nim'=> $request->nim,
            'major'=> $request->major,
            'class'=> $request->class,
            'courses_id'=> $request->course_id,
        ]);

        // redirect ke halaman student
        return redirect('admin/student')->with('message','Data student berhasil ditambahkan!');
    }

    // untuk menampilkan halaman edit
    public function edit($id){

    // mendapatkan data courses
    $courses = Courses::all();

    // cari data student berdasarkan id
        $student = Student::find($id); // select * FROM students WHERE id = $id;
        $courses = Courses::all();

        return view('admin.contents.student.edit', [
            'student' => $student,
            'courses' => $courses,
        ]);
    }

    // method untuk menyimpan hasil update
    public function update($id, Request $request){
    // cari data student berdasarkan id
    $student = Student::find($id); // select * FROM students WHERE id = $id;


     // validasi data yang diterima
     $request->validate([
        'name'=> 'required',
        'nim'=> 'required|numeric',
        'major'=> 'required',
        'class'=> 'required',
        'courses_id'=> 'nullable',
    ]);
 
      // simpan perubahan
      $student->update([
        'name'=> $request->name,
        'nim'=> $request->nim,
        'major'=> $request->major,
        'class'=> $request->class,  
        'courses_id'=> $request->courses_id,  
    ]);


    // kembalikan kehalaman student
    return redirect('admin/student')->with('message','Data student berhasil diedit!');
}
    // method untuk menghapus student
    public function destroy($id){
    $student = Student::find($id); // select * FROM students WHERE id = $id;

    // hapus student
    $student->delete();

    // kembalikan kehalaman student
    return redirect('admin/student')->with('message','Data student berhasil dihapus!');

}

}
