@extends('layouts.dashboard_layout') 

@section('title', 'Product')

@section('content')
<div class="col px-5" style="height:100vh;">
     <div class="row my-4 align-items-center">
          <form action="{{route('find')}}" method="GET">
               <input type="text" name="cari" placeholder="search..." value="{{ old('cari') }}" style="background-color:#232228;color:white;border-radius: 8px;border:1px solid #232228; padding:3px">
               <button type="submit" class="btn btn-dark">Find</button>
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
               <h4 class="text-white text-center m-0">List Product</h4>
          </div>
     </div>
     <div class="row" style="height: 85%;">
          <div class="w-100" style="border-radius: 30px; background-color:#232228; padding:30px; height:100%;">
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
               <div class="row container-overflow">
                    @foreach ($products as $product)
                    <div class="col-sm-4" style="padding: 0 40px;">
                         <div class="card card-product">
                              <div class="card-body p-0">
                                   <img class="img-card" src="{{asset('public/'.$product->img_path)}}" alt="" srcset="">
                                   <h5 class="mt-2 card-title text-center">{{$product->nama_product}}</h5>
                              </div>
                              <div class="hover-card">
                                   <a href="{{route('detail', $product->id)}}" class="btn btn-dark">Input Data</a>
                                   <form action="{{ route('deleteProduct') }}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                        <button class="btn btn-danger my-3">Delete</button>
                                   </form>
                                   <a href="{{ route('updateProduct',$product->id) }}" class="btn btn-block btn-warning">Edit</a>
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

{{-- @foreach ($products as $index => $product)
               <div class="card" style="width: 18rem;">
                    <img src="{{ asset('public/'.$product->img_path) }}" class="card-img-top" alt="Gambar
$product->name">
<div class="card-body">
     <h5 class="card-title">{{$product->name}}</h5>
     <p class="card-text">Harga : Rp.{{ $product->harga_product }}</p>
     <p class="card-text">Stock : {{ $product->stock_product }}</p>
     <p class="card-text">Kategori : {{ $product->kategori_product }}</p>
     <p class="card-text">Marketplace : {{ $product->nama_marketplace }}</p>
     <a href="{{ route('updateProduct',$product->id) }}" class="btn btn-primary">Edit</a>
     <td class="d-flex flex-row justify-content-around">
          <form action="{{ route('deleteProduct' }}" method="post">
               @csrf
               <input type="hidden" value="{{ $product->id }}" name="id">
               <button class="btn btn-danger">Delete</button>
          </form>
     </td>
</div>
</div>
@endforeach --}}