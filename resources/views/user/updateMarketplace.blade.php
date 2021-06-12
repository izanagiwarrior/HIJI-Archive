@extends('layouts.dashboard_layout')

@section('title', 'Marketplace')

@section('content')
<div class="col" style="height:80vh">
    <div class="row mb-3 p-3 py-4">
        <!-- <input type="text" class="ml-4" placeholder="search..." style="background-color:#232228;color:white;border-radius: 8px;border:1px solid #232228; padding:3px"> -->
    </div>
    <div class="row px-5" style="height: 100%">
        <div class="w-100" style="border-radius: 30px; background-color:#232228; padding:30px">
            <h3 class="text-white">Edit Marketplace</h3>
            <form action="{{ route('updateMarketplaceProcess',$marketplace->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="text-white" for="exampleInputEmail1">Nama Marketplace</label>
                    <input type="text" value="{{ $marketplace->nama_marketplace }}" name="nama_marketplace" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                
                <div class="form-group">
                    <label class="text-white" for="exampleInputEmail1">Nama Toko</label>
                    <input type="text" value="{{ $marketplace->nama_toko }}" name="nama_toko" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <button type="submit" value="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection