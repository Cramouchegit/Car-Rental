@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="mb-1">Nama</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Tulis nama kamu" name="name" 
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="mb-1">Alamat Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Tulis alamat email kamu" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="mb-1">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukan password kamu"
                name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password-confirm" class="mb-1">Konfirmasi Password</label>
            <input id="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @enderror" placeholder="Konfirmasi password kamu"
                name="password_confirmation" required autocomplete="new-password">

            @error('password-confirm')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button class="btn btn-primary d-block w-100" type="submit">Daftar</button>
            <p class="mb-0 mt-2 text-secondary text-center">
                Sudah Memiliki Akun? <a href="{{ route('login') }}"
                    class="text-decoration-underline text-primary">Masuk</a>
            </p>
    </form>
@endsection
