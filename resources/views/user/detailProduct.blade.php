@extends('layouts.dashboard_layout')  

@section('title', 'Detail Product')
        
@section('content')
<div class="col px-5" style="height:80vh">
     <div class="row my-4 align-items-center">
          <form action="{{route('find')}}" method="GET">
               <input type="text" name="cari" placeholder="search..." style="background-color:#232228;color:white;border-radius: 8px;border:1px solid #232228; padding:3px">
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
               <h4 class="text-white text-center m-0">Detail Product</h4>
          </div>
          @if(session()->has('error'))
          <br>
          <div class="alert alert-danger">
               {{ session()->get('error') }}
          </div>
          @endif
     </div>
     <div class="row" style="height: 100%">
          <div class="w-100 text-white container-overflow" style="border-radius: 30px; background-color:#232228; padding:30px; height:100%">
               <div class="row" style="height: 50%">
                    <div class="col-md-7">
                         <h2 class="card-title">{{$products->nama_product}}</h2>
                         <label for="" class="font-weight-light">Harga</label>
                         <p class="font-weight-bold">Rp.{{ $products->harga_product }}</p>
                         <label for="" class="font-weight-light">Stock</label>
                         <p class="font-weight-bold">{{ $products->stock_product }}</p>
                         <label for="" class="font-weight-light">Kategori</label>
                         <p class="font-weight-bold">{{ $products->kategori_product }}</p>

                    </div>
                    <div class="col-md-5">
                         <img src="{{ asset('public/'.$products->img_path) }}" class="card-img-top" alt="Gambar
                         {{$products->nama_product}}" style="height: 250px;object-fit:cover">
                    </div>
               </div>

               {{-- beda row --}}
               <div class="row" style="height: 40%">
                    <div class="col">
                         <label for="" class="font-weight-light">Deskripsi</label>
                         <p class="font-weight-bold">{{ $products->deskripsi }}</p>
                    </div>
               </div>
               <form action="{{ route('order',$products->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                         <label for="exampleInputEmail1">Product Name</label>
                         <input type="text" name="nama_product" value="{{$products->nama_product}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                    </div>

                    <div class="form-group">
                         <label for="exampleInputPassword1">Jumlah</label>
                         <div class="input-group-prepend">
                              <span class="input-group-text">Unit</span>
                              <input type="text" name="jumlah" class="form-control" id="exampleInputPassword1" required>
                         </div>
                    </div>

                    <div class="form-group">
                         <label class="text-white" for="exampleFormControlTextarea1">Marketplace</label>
                         <select name="marketplace" class="form-control" id="exampleInputPassword1" required>
                              @foreach($marketplace as $mk)
                              <option value="{{$mk->nama_marketplace}}">{{$mk->nama_marketplace}}</option>
                              @endforeach
                         </select>
                    </div>

                    <div class="form-group">
                         <label for="birthday">Tanggal</label>
                         <input type="date" name="tanggal_terjual" class="form-control" id="exampleInputPassword1" required>
                    </div>

                    <div class="form-group text-center">
                         <button type="submit" value="submit" class="btn btn-dark">Submit</button>
                         <a href="{{ route('product') }}" class="btn btn-danger ml-4">Back</a>
                    </div>
               </form>
               <div class="row text-center">
                    <div class="col">

                    </div>
               </div>
          </div>
     </div>
</div>
</div>


@endsection