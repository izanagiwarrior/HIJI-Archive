@extends('layouts.dashboard_layout')

@section('title', 'Dashboard')

@section('content')
<div class="col px-5" style="height:80vh">
     <div class="row my-4 align-items-center">
          <div class="col">
               <h4 class="text-white text-center m-0">Dashboard</h4>
          </div>
     </div>
     <div class="row" style="height: 100%">
          <div class="w-100" style="border-radius: 30px; background-color:#232228; padding:30px">
               <div class="text-white text-center justify-content-center">
                    <?php
                    $response = file_get_contents('https://free-quotes-api.herokuapp.com/');
                    ?>
                    <div class="text-center">
                         <h1 class="">Quotes of the day</h1>
                         <br>
                         <h3 class="">"<?= explode('"', $response)[3] ?>"</h3>
                         <br>
                         <h6 class="">- <?= explode('"', $response)[7] ?> -</h6>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection