@extends('layouts.dashboard_layout')

@section('title', 'Profile')

@section('content')
    <div class="col px-5" style="height:80vh">
        <div class="row my-4">
            <div class="col">
                <h4 class="text-white text-center m-0">Profile</h4>
            </div>
        </div>
        <div class="row" style="height: 100%">
            <div class="w-100" style="border-radius: 30px; background-color:#232228; padding:30px">
                <div class="col">
                    <div style="border-radius: 50%; width:100px; height:100px;border-radius:50%;background-image:url('https://images.unsplash.com/photo-1605727954728-d8b26d5f23f7?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=632&q=80');"
                        class="bg-primary mx-auto my-3">
                    </div>
                    <h5 class="text-white text-center" style="font-family: 'Bebas Neue'; letter-spacing:1px; ">
                        {{ Auth::user()->name }}</h5>
                    <a href="{{ route('profile.edit', Auth::user()->id) }}"
                        class="text-white btn p-2 px-4 bg-warning align mr-2"
                        style="position: absolute;top:0;right:0">Change Password</a>
                </div>


                <div class="row m-0" style="width:100%; height:69%">
                    <div class="col-8 p-2">
                        <div style="border-radius: 30px; background-color:#34333C; padding:30px;height:100%"
                            class="d-flex flex-column justify-content-around">
                            <div class="d-flex justify-content-between">
                                <strong class="profile-lable">Full Name</strong>
                                <p class="text-white">{{ Auth::user()->name }}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <strong class="profile-lable">Email</strong>
                                <p class="text-white">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <strong class="profile-lable">Password</strong>
                                <p class="text-white">********</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <strong class="profile-lable">Created Date</strong>
                                <p class="text-white">{{ Auth::user()->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 p-2">
                        <div style="border-radius: 30px; background-color:#34333C; padding:30px;height:100%">
                            <div>
                                <strong class="profile-lable">Store Name</strong>
                                <p class="text-white">Ximi Store</p>
                            </div>
                            <div>
                                <strong class="profile-lable">Store Domicile</strong>
                                <p class="text-white">Jawa Barat</p>
                            </div>
                            <div>
                                <strong class="profile-lable">Store Address</strong>
                                <p class="text-white">Jl. Melati No.162, Bogor, Jawa Barat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
