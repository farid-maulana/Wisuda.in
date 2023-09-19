@extends('layouts.master')

@section('content')
    <div class="card card-sign">
        <div class="card-header">
            <a href="#" class="header-logo mb-4">
                <img src="{{ Vite::asset('resources/images/logo-text.svg') }}">
            </a>
            <h3 class="card-title">Sign In</h3>
            <p class="card-text">Selamat Datang! Silakan masuk untuk melanjutkan</p>
        </div><!-- card-header -->
        <div class="card-body pb-5">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-4">
                    <label class="form-label">Kata Sandi</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    <a href="#">Lupa kata sandi?</a>
                </div>
                <button class="btn btn-primary btn-sign">Masuk</button>
            </form>
        </div><!-- card-body -->
    </div><!-- card -->
@endsection


@push('script')
    <script>
        document.body.classList.add('page-sign')
    </script>
@endpush
