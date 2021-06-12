@extends('layouts.app')

@section('title', 'Email')

@section('content')
<div class="container-fluid"
    style="height: 100vh; background-image: url({{asset('img/banner-front-page.png')}});background-repeat:no-repeat; background-size:cover;">

    <div class="row d-flex" style="height: 100%">
        <div class="col d-flex justify-content-between flex-column ml-3">
            <div>
                <a href={{route('frontPage')}}><img src="{{asset('img/hiji-logo.png')}}" alt="" class="py-4"></a>
            </div>
            <div class="text-white">
                <h5 class="border border-light rounded d-inline p-3 text-white">WEB CONTROLLING E-COMMERCE</h5>
                <h1 style="font-weight: bold; font-size:70px" class="mt-5 mb-4">Lets make it
                    <br /><span style="color: #D34335">Simple.</span></h1>
            </div>
            <div>

            </div>
        </div>
        <div class="col-4 px-5" style="background-color: #D34335">
            <h1 class="text-center text-white m-3 py-3" style="font-weight: bold">FORGET PASSWORD</h1>
            <p class="text-white text-center mb-5">jika anda lupa password, anda bisa masukkan email address untuk
                proses
                konfirmasi</p>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group mx-3">
                    <label for="name" class="text-white">Email akun anda</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mx-3">
                    <button type="submit" class="btn btn-block btn-light mt-5 mb-2"
                        style="color: #D34335;font-weight:bold;">
                        CONFIRM
                    </button>
                    <a href="{{route('login')}}" class="btn btn-block btn-link mt-2 mb-2 text-white">I HAVE ACCOUNT</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection