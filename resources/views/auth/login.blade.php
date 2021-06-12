@extends('layouts.app')  

@section('title', 'Login')

@section('content')
<div class="container-fluid"
    style="height: 100vh; background-image: url({{asset('img/banner-front-page.png')}});background-repeat:no-repeat; background-size:cover;">
    <div class="row py-4" style="height: 10%">
        <div class="col">
            <a href={{route('frontPage')}}><img src="{{asset('img/hiji-logo.png')}}" alt="" class="ml-3"></a>
        </div>
    </div>
    <div class="row d-flex" style="height: 90%">
        <div class="col d-flex align-items-center ml-3">
            <div class="text-white">
                <h5 class="border border-light rounded d-inline p-3 text-white">WEB CONTROLLING E-COMMERCE</h5>
                <h1 style="font-weight: bold; font-size:70px" class="mt-5 mb-4">Lets make it
                    <br /><span style="color: #D34335">Simple.</span></h1>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 mx-auto" style="width: 26rem; background-color:#D34335;border-radius:30px">
                <h1 class="text-center py-4 text-white">SIGN IN</h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mx-4 mb-5">
                            <label for="email" class="text-white">Username/Email</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback " role="alert">
                                <strong class="error-message">{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group mx-4">
                            <label for="password" class="text-white">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group d-flex justify-content-end" style="margin-right: 12px;">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>

                        <div class="form-group d-flex flex-column align-items-center">
                            <button type="submit" class="btn btn-light py-2 px-5 mt-5 mb-2 w-50"
                                style="color: #D34335;font-weight:bold;">
                                LOGIN
                            </button>
                            <p class="text-white" style="font-size:13px">Don’t have an Account? <a
                                    class="btn p-0 btn-link text-white" style="font-size:13px"
                                    href="{{ route('register') }}">
                                    Sign up
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection