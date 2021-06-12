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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>HIJI</title>
    <link rel="icon" href="{{asset('img/hiji-logo.png')}}" type="image/icon type">
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
        <style>
            .icon-service {
                margin: 0 auto;
                margin-bottom: 30px;
                width: 90px;
                height: 90px;
                background-color: #D34335;
            }

            .btn-about {
                margin-top: 20px;
                padding: 10px 20px;
                background: #fff;
                color: #D34335;
            }

            .btn-about:hover {
                background: #D34335;
                color: #fff;
                border: 1px solid #fff;
            }


            .btn-service {
                background: rgba(0, 0, 0, 0);
                border: 1px solid #D34335;
                color: white;
            }

            .btn-service:hover {
                background: #D34335;
                color: #4A140E;
            }

            .services-section {
                height: 900px;
                background-color: #4A140E;
            }

            .card {
                width: 479px;
                margin: 0 auto;
                background-color: rgba(211, 67, 53, .20);
                color: white;
            }

            .banner-info {
                background-color: #D34335;
                position: absolute;
                top: 48rem;
                right: 0;
                color: white;
            }

            .button-read-more {
                background-color: #fff;
                color: #D34335;
                border: 1px solid #fff;
            }

            .button-read-more:hover {
                background-color: #D34335;
                border: 1px solid #fff;
                color: #fff;
            }

            .button-view {
                background-color: #D34335;
                border: 1px solid #fff;
                color: #fff;
            }

            .button-view:hover {
                background-color: #fff;
                color: #D34335;
                border: 1px solid #D34335;


            }
        </style>

        <div class="position-relative bg-secondary" style="background-image: url({{asset('img/banner-front-page.png')}}); background-repeat:no-repeat; background-size:cover;">
            {{-- bagian navigasi --}}
            <div class="container p-4">
                <nav class="navbar navbar-expand navbar-dark d-flex justify-content-between " style= "top:0px;">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <div class="navbar-nav mr-auto">
                                <img src="{{asset('img/hiji-logo.png')}}" alt="">
                            </div>

                            <div class="navbar-nav mr-auto ml-auto">
                                <a class="nav-item mx-4 nav-link" href="#home"><h3>Home</h3></a>
                                <a class="nav-item mx-4 nav-link" href="#about"><h3>Services</h3></a>
                                <a class="nav-item mx-4 mr-5 nav-link" href="#contact"><h3>About</h3></a>
                            </div>

                            <div class="navbar-nav ml-auto">
                                <a href="{{route('login')}}" class="btn border border-light rounded text-light px-5 ml-5">Login</a>
                            </div>

                        </div>
                    </div>
                </nav>
                {{-- bagian akhir navigasi --}}
                {{-- banner --}}
                <div id="home">
                    <div class="col ml-2 pl-4 d-flex align-items-center" style="height: 800px">
                        <div class="text-white">
                            <h5 class="border border-light rounded d-inline p-3 text-white">WEB CONTROLLING E-COMMERCE</h5>
                            <h1 style="font-weight: bold" class="mt-5 mb-4">WEBSITE YANG DAPAT<br />
                                MEMBANTU PEKERJAAN E-COMMERCE</h1>
                            <a href="" class="btn p-3 mt-4 text-light" style="background-color: #D34335">GET TO KNOW</a>
                        </div>
                    </div>
                </div>
                {{-- akhir banner --}}
            </div>

            {{-- banner info --}}
            <div class="w-50 p-4 banner-info">
                <div class="row">
                    <div class="col">
                        <h2>TERINTEGRASI DENGAN BERBAGAI E-COMMERCE TERNAMA</h2>
                        <!-- <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec tristique mauris tempor diam et
                            in id enim.
                            Congue
                            mi adipiscing odio malesuada consequat, tincidunt feugiat auctor orci.</p> -->
                        <div>
                            <!-- <a href="" class="btn btn mr-4 button-read-more">READ MORE</a>
                            <a href="" class="btn button-view">VIEW WEBSITE</a> -->
                        </div>
                    </div>
                </div>
            </div>

            {{-- akhir banner info --}}

            {{-- service --}}
            <div id="about">
                <div class="container-fluid services-section d-flex flex-column align-items-center justify-content-center pt-5">

                    <div class="row w-100 mx-auto mb-3">
                        <div class="col-12">
                            <h2 class="text-center text-white">OUR SERVICE</h2>
                        </div>
                    </div>
                    <div class="row w-100 mx-auto mb-3">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-service rounded">

                                    </div>
                                    <p class="card-text text-center px-3">Integrated E-Commerce</p>
                                    <div class="d-flex justify-content-center">
                                        <!-- <a href="#" class="btn btn-service">VIEW WEBSITE</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-service rounded">
                                    </div>
                                    <p class="card-text text-center px-3">Statistics</p>
                                    <div class="d-flex justify-content-center">
                                        <!-- <a href="#" class="btn btn-service">VIEW WEBSITE</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row w-100 mx-auto mt-3">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-service rounded">

                                    </div>
                                    <p class="card-text text-center px-3">Friendly UI</p>
                                    <div class="d-flex justify-content-center">
                                        <!-- <a href="#" class="btn btn-service">VIEW WEBSITE</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-service rounded">

                                    </div>
                                    <p class="card-text text-center px-3">Fast Respon Admin</p>
                                    <div class="d-flex justify-content-center">
                                        <!-- <a href="#" class="btn btn-service">VIEW WEBSITE</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- akhir service --}}

            {{-- about --}}
            <div id="contact">
                <div class="container-fluid text-center text-white" style="background-color: #D34335; height: 800px;padding-top: 80px;width:100%;">
                    <h1>GET TO KNOW</h1>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec tristique mauris tempor diam et in id enim. </p> -->
                    <!-- <a href="http://" class="btn rounded btn-about mb-5" style="position: relative; z-index:1;">READ MORE</a> -->
                    <img src="{{asset('img/bg-about.png')}}" alt="" style="position: absolute; z-index:0;left:280px;top:2020px;">

                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-4 bg-primary p-5" style="background-image: url({{asset('img/bg-about-card.png')}})">
                        </div>
                        <div class="col-4 bg-light p-5 text-dark text-justify">
                            <h2>OUR TEAM</h2>
                            <p>M. Faiz Triputra<br />
                               David William Da Costa<br />
                               Muhammad Fakhrul Safitra<br />
                               Agistra Febriandi<br />
                               Yonathan Bagus Pratama<br /></p>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing<br />elit. . </p> -->
                        </div>
                    </div>
                </div>
            </div>
            {{-- akhir about --}}

            <footer class="bg-dark text-white text-center py-2">
                <p>created by PARASIT</p>
            </footer>

    </main>
</body>

</html>