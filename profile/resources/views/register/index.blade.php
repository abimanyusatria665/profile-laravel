@extends('layouts.main')

@section('content')


<main class="form-signin w-100 m-auto mt-5 card c-3">
    <form action="/register" method="post">
        @csrf
      <h1 class=" mb-3 fw-normal color-5">Registrasi</h1>
      <div class="form-floating my-3">
        <input type="text" class="c-2 form-control @error('name') is-invalid @enderror" name="name" id="floatingInput" placeholder="name@example.com" required value="{{ old('name') }}">
        <label for="floatingInput">Nama</label>
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating my-3">
        <input type="email" class="c-2 form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" required value="{{ old('email') }}">
        <label for="floatingInput">Alamat Email </label>
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" class="c-2 form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
  
      <div class="checkbox mb-3">
        <label>
        </label>
      </div>
      <button class="w-100 btn btn-lg my-3" type="submit">Registrasi</button>
    </form>
  </main>
@endsection