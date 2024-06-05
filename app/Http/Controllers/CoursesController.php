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

    //method untuk menampilkan form tambah courses
    public function create()
    {
        
        return view('admin.contents.courses.create');
    }

    // method untuk menyimpan data courses baru
    public function store(Request $request){
        
        // validasi data yang diterima
        $request->validate([
            'name'=> 'required',
            'category'=> 'required',
            'desc'=> 'required',
        ]);

        // simpan data ke db
        Courses::create([
            'name'=> $request->name,
            'category'=> $request->category,
            'desc'=> $request->desc,
           
        ]);


        // kembalikan kehalaman courses
           return redirect('admin/courses')->with('message','Data courses berhasil ditambahkan!');

}
        // untuk menampilkan halaman edit
        public function edit($id){

        // cari data courses berdasarkan id
        $courses = Courses::find($id); // select * FROM courses WHERE id = $id;

        return view('admin.contents.courses.edit', [
            'courses' => $courses
        ]);


}

        // method untuk menyimpan hasil update
         public function update($id, Request $request){
        // cari data student berdasarkan id
        $courses = Courses::find($id); // select * FROM courses WHERE id = $id;
    
    
         // validasi data yang diterima
         $request->validate([
            'name'=> 'required',
            'category'=> 'required|numeric',
            'desc'=> 'required',

        ]);
     
          // simpan perubahan
          $courses->update([
            'name'=> $request->name,
            'category'=> $request->category,
            'desc'=> $request->desc,
            
        ]);
    
    
        // kembalikan kehalaman courses
        return redirect('admin/courses')->with('message','Datacourses berhasil diedit!');
    }
        // method untuk menghapus courses
        public function destroy($id){
        $courses = Courses::find($id); // select * FROM courses WHERE id = $id;
    
        // hapus courses
        $courses->delete();
    
        // kembalikan kehalaman courses
        return redirect('admin/courses')->with('message','Data courses berhasil dihapus!');
    
    }
}