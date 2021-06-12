@extends('layouts.dashboard_layout')

@section('title', 'Tambah Product')

@section('content')
<div class="col" style="height:80vh">
    <div class="row mb-3 p-3 py-4">
    </div>
    <div class="row px-5" style="height: 100%">
        <div class="w-100" style="border-radius: 30px; background-color:#232228; padding:30px">
            <h3 class="text-white text-center"><b>INPUT PRODUCT</b></h3>
            <form action="{{ route('addProductProcess') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="text-white" for="exampleInputEmail1">Nama Produk</label>
                    <input type="text" name="nama_product" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>

                <div class="form-group">
                    <label class="text-white" for="exampleInputPassword1">Harga</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp. </span>
                        <input type="text" name="harga_product" class="form-control" id="exampleInputPassword1" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="text-white" for="exampleInputEmail1">Stok</label>
                    <input type="text" name="stock_product" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>

                <div class="form-group">
                    <label class="text-white" for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea type="text" name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label class="text-white" for="exampleFormControlTextarea1">Kategori Produk</label>
                    <select name="kategori_product" class="form-control">
                        <option value="Pakaian">Pakaian</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Game">Game</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="form-group text-white">
                    <label class="text-white" for="exampleFormControlFile1">Image file input</label>
                    <input type="file" name="img_path" class="form-control-file" id="exampleFormControlFile1" required>
                </div>

                <div class="form-group text-center">
                    <button type="submit" value="submit" class="btn btn-dark" style="width:150px">Submit</button>
                    <a href="{{route('product')}}" class="btn btn-dark ml-4">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection