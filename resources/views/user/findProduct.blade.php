@extends('layouts.dashboard_layout') 

@section('title', 'Find')

@section('content')
<div class="col px-5" style="height:80vh">
     <div class="row my-4 align-items-center">
          <form action="{{route('find')}}" method="GET">
               <input type="text" name="cari" class="search-input" placeholder="search..." value={{$_GET['cari']}}>
               <button type="submit" value="CARI" class="btn btn-dark">Find</button>
          </form>
          <form action="{{route('category')}}" method="GET" class="ml-4">
               <select name="cari" id="cars" style="background-color:#232228;color:white;border-radius: 8px;border:1px solid #232228; padding:3px">
                    <option value="Pakaian">Pakaian</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Game">Game</option>
                    <option value="Lainnya">Lainnya</option>
               </select>
               <button type="submit" class="btn btn-dark">Find</button>
          </form>
          <div class="col">
               <h4 class="text-white text-center m-0">Find Product : <b>{{$_GET['cari']}}</b> </h4>
          </div>
     </div>
     <div class="row" style="height: 100%">
          <div class="w-100" style="border-radius: 30px; background-color:#232228; padding:30px">
               <div class="row mb-4 d-flex justify-content-center">
                    @if (count($products) === 0)
                    <center>
                         <div class="d-flex justify-content-center ">
                              <p class="text-muted">There is no data...</p>
                         </div>
                         <div class="d-flex justify-content-center">
                              <a href="{{route('addProduct')}}" class="btn btn-dark">Add Product</a>
                         </div>
                    </center>

                    @elseif (count($products) > 0)

                    <div class="mx-auto">
                         <a href="{{route('addProduct')}}" class="btn btn-dark">Add Product</a>
                    </div>
               </div>
               <div class="row">
                    @foreach ($products as $product)
                    <div class="col-sm-4" style="padding: 0 40px;">
                         <div class="card card-product">
                              <div class="card-body p-0">
                                   <img class="img-card" src="{{asset('public/'.$product->img_path)}}" alt="" srcset="">
                              </div>
                              <div class="hover-card">
                                   <a href="" class="btn btn-dark">Details</a>
                              </div>
                         </div>
                    </div>
                    @endforeach

               </div>

          </div>

          @endif
     </div>
</div>
</div>
@endsection