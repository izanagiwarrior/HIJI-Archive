<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" href="{{asset('img/hiji-logo.png')}}" type="image/icon type">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    @stack('styles')
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: roboto;
        }
    </style>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row" style="height:inherit;">
                <div class="col-md-2 p-0" style="border-radius: 0 30px 30px 0;background-color:#232228;height:100%">
                    {{-- bagian header navigation --}}
                    <div class="d-flex flex-column align-items-center mt-4" style="width:100%">
                        <img src="{{asset('img/hiji-logo.png')}}" alt="" class="mb-4" />
                        <div style="width: 150px;height:150px;border-radius:50%;background-image:url('https://images.unsplash.com/photo-1605727954728-d8b26d5f23f7?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=632&q=80');
                            background-position:center; background-size:220px 360px">
                        </div>
                    </div>
                    {{-- akhir bagian header navigation --}}

                    {{-- bagian navigation --}}
                    <ul class="sidebar">
                        <li class="text-white text-center"><b>Admin</b></li>
                        <li class="sidebar-list"><a class="sidebar-anchor active" href="{{route('admin.home')}}">Dashboard</a></li>
                        <li class="sidebar-list"><a class="sidebar-anchor active" href="{{route('admin.user')}}">User</a></li>
                        <!-- <li class="sidebar-list"><a class="sidebar-anchor" href="{{route('product')}}">Product</a></li>
                        <li class="sidebar-list"><a class="sidebar-anchor" href="{{route('marketplace')}}">Marketplace</a></li>
                        <li class="sidebar-list"><a class="sidebar-anchor" href="{{route('statistik')}}">Statistics</a></li>
                        <li class="sidebar-list"><a class="sidebar-anchor" href="{{route('profile')}}">Profile</a></li> -->
                        <li class="sidebar-list"><a class="sidebar-anchor" class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    {{-- akhir bagian navigation --}}
                </div>
                @yield('content')
            </div>
        </div>
    </main>
</body>

</html>