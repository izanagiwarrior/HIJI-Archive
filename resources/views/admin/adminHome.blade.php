@extends('layouts.admin')

@section('title', 'Admin : Dashboard')

@section('content')
<div class="col px-5" style="height:80vh">
     <div class="row my-4">
          <!-- <input type="text" placeholder="search..." style="background-color:#232228;color:white;border-radius: 8px;border:1px solid #232228; padding:3px"> -->
          <div class="col">
               <h4 class="text-white text-center m-0">Dashboard</h4>
          </div>
     </div>
     <div class="row" style="height: 100%">
          <div class="w-100" style="border-radius: 30px; background-color:#232228; padding:30px">
               <p class="text-white">You're Administrator !</p>
          </div>
     </div>
</div>
@endsection