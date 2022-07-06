@extends('layouts.main')
 @section('title', 'Films')

 @section('content')

 @if(session()->has('berhasil'))
   <div class="alert alert-success">
    {{ session()->get('berhasil') }}      
 @endif 
</div> 
     <div class="container mt-5">
         <div class="card">
          <div class="card-header">
              <h1>Data konten</h1>
          </div>
        <div class="card-body">
       <div class="form-group">
           <a href="{{ route('contents.create') }}" class="btn btn-success">Tambah</a>
       </div>
       <table class="table table-striped table-hover">
           <thead>
               <tr>
                   <th>#</th>
                   <th>Gambar</th>
                   <th>Judul</th>
                   <th>Deskripsi</th>
               </tr>
           </thead>
           <tbody>
               @php
                   $increment=1;
               @endphp
               @foreach ($contents as $item)
               <tr>
                   <td>{{ $increment++ }}</td>
                   <td>{{ $item->gambar }}</td>
                   <td>{{ $item->judul }}</td>
                   <td>{{ $item->deskripsi }}</td>
                   <td>
                       <a href="{{ route('profile.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('profile.destroy', $item->id) }}" method="post">
                     @csrf
                     @method('delete')
                     <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger mt-1">Hapus</button>
                    </form>
                   </td>

               </tr>
               @endforeach
           </tbody>
       </table>
       </div>
    </div>
     </div>
 @endsection