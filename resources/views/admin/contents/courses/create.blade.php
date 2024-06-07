@extends('admin.main')
@section('content')

<div class="pagetitle">
    <h1>+ Courses</h1>
    <nav>
      <ol class="breadcrumb">
    
        <li class="breadcrumb-item">Courses</li>
        <li class="breadcrumb-item active">+ Courses</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
            <form action="/admin/courses/store" method="post" class="mt-3">
                @csrf
                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                

                <div class="mb-2">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" id="category" class="form-select">
                        <option value="">Pilih Category</option>
                        <option value="Sejarah Indonesia">Sejarah Indonesia</option>
                        <option value="Ppkn">Ppkn</option>
                        <option value="Matematika">Matematika</option>
                    </select>
                </div>

                <div class="mb-2">
                    <label for="desc" class="form-label">Desc</label>
                    <input type="text" name="desc" id="desc" class="form-control">
                </div>


                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
  </section>
@endsection