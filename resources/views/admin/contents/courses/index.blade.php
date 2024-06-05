@extends('admin.main')
@section('content')

<div class="pagetitle">
    <h1>Courses</h1>
    <nav>
      <ol class="breadcrumb">
    
        <li class="breadcrumb-item"></li>
        <li class="breadcrumb-item active">Courses</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
          <a href="/admin/courses/create" class="btn btn-primary my-3">+ Courses</a>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Desc</th>
                    <th>Action</th>
                </tr>
                @foreach($courses as $courses)
                <tr>
                    <td>1</td>
                    <td>{{ $courses->name }}</td>
                    <td>{{ $courses->category }}</td>
                    <td>{{ $courses->desc }}</td>
                    <td>
                        <a href="/admin/courses/edit/{{ $courses->id }}" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
  </section>
@endsection