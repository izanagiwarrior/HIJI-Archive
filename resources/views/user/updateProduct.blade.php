@extends('layouts.dashboard_layout')

@section('title', 'Edit Product')

@section('content')
<div class="col" style="height:80vh">
    <div class="row mb-3 p-3 py-4">
        <!-- <input type="text" class="ml-4" placeholder="search..." style="background-color:#232228;color:white;border-radius: 8px;border:1px solid #232228; padding:3px"> -->
    </div>
    <div class="row px-5" style="height: 100%">
        <div class="w-100" style="border-radius: 30px; background-color:#232228; padding:30px">
            <h3 class="text-white">Edit Product</h3>
            <form action="{{ route('updateProductProcess',$products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-white">Nama Produk</label>
                    <input type="text" value="{{ $products->nama_product }}" name="nama_product" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-white">Harga</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp. </span>
                        <input type="text" value="{{ $products->harga_product }}" name="harga_product" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-white">Stok</label>
                    <input type="text" value="{{ $products->stock_product }}" name="stock_product" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="form-group" class="text-white">
                    <label for="exampleFormControlTextarea1" class="text-white">Deskripsi</label>
                    <textarea type="text" name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $products->deskripsi }}</textarea>
                </div>

                <div class="form-group" class="text-white">
                    <label for="exampleFormControlTextarea1" class="text-white">Kategori Produk</label>
                    <select name="kategori_product" class="form-control">
                        <option value="Pakaian">Pakaian</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Game">Game</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="form-group text-center">
                    <button type="submit" value="submit" class="btn btn-dark mr-4">Submit</button>
                    <a href="{{route('product')}}" class="btn btn-dark">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection