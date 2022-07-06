@extends('layouts.main')
 @section('title', 'Edit Konten')

 @section('content')
 <div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1>Edit data konten</h1>
        </div>
        <div class="card-body">
       <form action="{{ route('contents.update', $contents->id ) }}" method="post" enctype="multipart/form-data">
         @csrf
         @method('PATCH')
         @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
        
        <div class="form-group mb3">
            <label for="judul">Title</label>
             <input type="text" name="judul" class="form-control" value="{{ $contents->judul }}" required>
        </div>
        <div class="form-group mb3">
            <label for="deskripsi">Description</label>
            <input type="text" name="deskripsi" class="form-control" value="{{ $contents->deskripsi }}" required>
        </div>

 
        <div class="form-group mb3">
            <label for="gambar">Image</label>          
            
            <div class="mb-2">
                <img id="photo-img" name="gambar" class="mx-auto" src="{{ asset('storage/'.$contents['gambar'])}}" alt="" srcset="" style="width:10rem;height:10rem">
            </div>
            <input onchange="document.getElementById('photo-img').src = window.URL.createObjectURL(this.files[0])"
                accept=".jpg, .jpeg, .png" class="block" id="photo" type="file" name="gambar" class="form-control">
            </div>


         <div class="form-group d-flex justify-content-beetwen mt-3">
             <button type="submit" class="btn btn-primary">Submit</button>
             <a href="{{ route('contents.index') }}" class="mx-3 btn btn-secondary">Kembali</a>
         </div>
     </form>
    </div>
     </div>
</div>
 @endsection