@extends('layouts.main')
 @section('title', 'Edit Konten')

 @section('content')
 <div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1>Edit data konten</h1>
        </div>
        <div class="card-body">
       <form action="{{ route('profile.update', $profile->id ) }}" method="post">
         @csrf
         @method('PUT')
         <div class="form-group mb3">
             <label for="judul">Judul</label>
             <input type="file" name="judul"class="form-control" value="{{ old('image', $profile->image) }}" required>
         </div>
         <div class="form-group mb3">
             <label for="author">Author</label>
             <input type="text" name="author"class="form-control" value="{{ old('judul', $profile->judul) }}" required>
         </div>
         <div class="form-group mb3">
             <label for="studio">Studio</label>
             <input type="text" name="studio"class="form-control" value="{{ old('deskripsi', $profile->deskripsi) }}" required>
         </div>
         <div class="form-group d-flex justify-content-beetwen mt-3">
             <button type="submit" class="btn btn-primary">Submit</button>
             <a href="{{ route('profile.index') }}" class="mx-3 btn btn-secondary">Kembali</a>
         </div>
     </form>
    </div>
     </div>
</div>
 @endsection