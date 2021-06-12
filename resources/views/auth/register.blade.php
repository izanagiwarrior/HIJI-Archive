@extends('layouts.app')  

@section('title', 'Register')

@section('content')
<div class="container-fluid"
    style="height: 100vh; background-image: url({{asset('img/banner-front-page.png')}});background-repeat:no-repeat; background-size:cover;">
    <div class="row" style="height: 100%">

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
            <h1 class="text-center text-white m-3" style="font-weight: bold">SIGN UP</h1>
            <p class="text-white text-center mb-5">belum punya akun? silahkan daftar terlebih dahulu form dibawah ini
            </p>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group mx-3">
                    <label for="name" class="text-white">Nama Lengkap</label>

                    <input id="text" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong class="error-message">{{ $message }}</strong>
                    </span>
                    @enderror

                </div>


                <div class="form-group mx-3">
                    <label for="email" class="text-white">Email Address</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong class="error-message">{{ $message }}</strong>
                    </span>
                    @enderror

                </div>


                <div class="form-group mx-3">
                    <label for="password" class="text-white">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong class="error-message">{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group mx-3">
                    <label for="password-confirmation" class="text-white">Konfirmasi Password</label>

                    <input id="password-confirmation" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="name">
                </div>

                <div class="form-group mx-3">
                    <button type="submit" class="btn btn-block btn-light mt-5 mb-2"
                        style="color: #D34335;font-weight:bold;">
                        REGISTER
                    </button>
                    <a href="{{route('login')}}" class="text-white text-center d-block">I Have an
                        Account</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection