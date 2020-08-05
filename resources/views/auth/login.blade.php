@extends('layouts.auth')

@section('content')
    <div class="kt-login__form">
        <div class="kt-login__title">
            <h3 class="text-white">Selamat Datang di MAJAPAHIT JUNIOR MATCH</h3><br>
            <h4 class="text-white">Login</h4>
        <form class="kt-form" action="{{ route('login') }}" method="post" style="margin-top: 1rem!important;">
            @csrf
            @if ($errors->any())
                <div class="alert alert-solid-danger alert-bold" role="alert">
                    <div class="alert-text">
                        <ul class="mb-0 ml-0 text-left">
                            @foreach ($errors->all() as $error)
                                <li style="color: #000;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Email" name="email" id="email" autocomplete="off">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" placeholder="Password" name="password" id="password" autocomplete="off">
            </div>
            <div class="kt-login__actions">
                <button type="submit" class="btn btn-success btn-block btn-elevate kt-login__btn-success">Masuk</button>
            </div>
            {{-- <div class="kt-login__divider">
                <div class="kt-divider">
                    <span></span>
                    <span class="text-white">Belum punya akun ?</span>
                    <span></span>
                </div>
            </div>
            <a href="{{ route('register') }}" class="btn btn-block btn-success btn-elevate kt-login__btn-success">Daftar Akun</a> --}}
        </form>
    </div>
@endsection
