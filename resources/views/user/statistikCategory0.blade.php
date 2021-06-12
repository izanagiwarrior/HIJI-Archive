@extends('layouts.dashboard_layout')

@section('title', 'Statistics')

@section('content')
<div class="col px-5" style="height:80vh">
    <div class="row my-4">
        <div class="col">
            <h4 class="text-white text-center m-0">Statistics : {{$_GET['cari']}}</h4>
        </div>
    </div>
    <div class="row p-2" style="height: 100%">
        <div class="justify-content-end float-right">
            <form action="{{route('statistikCategory')}}" method="GET" class="ml-4">
                <select name="cari" id="cars" style="background-color:#232228;color:white;border-radius: 8px;border:1px solid #232228; padding:3px">
                    @foreach($marketplace as $mk)
                    <option value="{{$mk->nama_marketplace}}">{{$mk->nama_marketplace}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-dark">Find</button>
            </form>
        </div>
        <div class="justify-content-end float-right">
            <form action="{{route('statistikProduct')}}" method="GET" class="ml-4">
                <select name="cari" id="cars" style="background-color:#232228;color:white;border-radius: 8px;border:1px solid #232228; padding:3px">
                    @foreach($products as $pd)
                    <option value="{{$pd->nama_product}}">{{$pd->nama_product}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-dark">Find</button>
            </form>
        </div>
        <div class="w-100 container-overflow" style="border-radius: 30px; background-color:#232228; padding:30px">
            <div class="card-deck text-white">
                <div class="container d-flex justify-content-center">
                    <p class="text-center">No Data...</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection