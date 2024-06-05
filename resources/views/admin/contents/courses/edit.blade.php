@extends('admin.main')
@section('content')

<div class="pagetitle">
    <h1>Edit Courses</h1>
    <nav>
      <ol class="breadcrumb">
    
        <li class="breadcrumb-item">Courses</li>
        <li class="breadcrumb-item active"> Edit Courses</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
            <form action="/admin/courses/update/ {{ $courses->id }}" method="post" class="mt-3">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $courses->name ?? '' }}">
                </div>

                <div class="mb-2">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" id="category" class="form-select">
                        <option value="">Pilih Category</option>
                        <option value="dewasa" {{ $courses->category == 'dewasa' ? 'selected' : ''}}>Dewasa</option>
                        <option value="lansia" {{ $courses->category == 'lansia' ? 'selected' : ''}}>Lansia</option>
                        <option value="anak - anak" {{ $courses->category == 'anak - anak' ? 'selected' : ''}}>Anak - Anak</option>
                    </select>
                </div>

                <div class="mb-2">
                    <label for="desc" class="form-label">Desc</label>
                    <input type="text" desc="desc" id="desc" class="form-control" value="{{ $courses->desc ?? '' }}">
                </div>

                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
  </section>
@endsection