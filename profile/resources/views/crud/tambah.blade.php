@extends('layouts.main')
 @section('title', 'Tambah Data')

 @section('content')
     <div class="container mt-5">
           <div class="card">
               <div class="card-header">
                   <h1>Tambah data film</h1>
               </div>
               <div class="card-body">
              <form action="{{ route('contents.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('POST')
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
                    <label for="gambar">Image</label>
                    <input type="file" name="gambar" class="form-control" value="{{ old('gambar') }}">
                </div>
                <div class="form-group mb3">
                    <label for="judul">Title</label>
                    <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" required>
                </div>
                <div class="form-group mb3">
                    <label for="deskripsi">Description</label>
                    <input type="text" name="deskripsi" class="form-control" value="{{ old('deskripsi') }}" required>
                </div>
                <div class="form-group d-flex justify-content-beetwen mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('contents.index') }}" class=" mx-3 btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
            </div>
     </div>
 @endsection