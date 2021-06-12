@extends('layouts.dashboard_layout')

@section('title', 'Order List')

@section('content')

<div class="col px-5" style="height:80vh">
    <div class="row my-4">
        <div class="col">
            <h4 class="text-white text-center m-0">Data</h4>
        </div>
    </div>
    <div class="row" style="height: 100%">
        <div class="w-100" style="border-radius: 30px; background-color:#232228; padding:30px">
            <div class="justify-content-end float-right">
                <form action="{{route('order_category')}}" method="GET" class="ml-4">
                    <select name="cari" id="cars" style="background-color:#232228;color:white;border-radius: 8px;border:1px solid #232228; padding:3px">
                        <option value="Shopee">Shopee</option>
                        <option value="Tokopedia">Tokopedia</option>
                        <option value="Lazada">Lazada</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <button type="submit" class="btn btn-dark">Find</button>
                </form>
            </div>
            <div class="container d-flex">
                <div class="justify-content-start">
                    <a href="{{route('product')}}" class="btn btn-dark">New</a>
                </div>
            </div>
            <br>
            <div class="container d-flex justify-content-center">
                <table class="table table-striped">
                    <tr class="bg-dark text-white text-center">
                        <th>#</th>
                        <th>Nama Product</th>
                        <th>Marketplace</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                    </tr>
                    @if (count($data) === 0)
                    <tr class="text-center">
                        <td colspan="5  " class="text-white">No Data</td>
                        </td>
                    </tr>
                    @elseif (count($data) > 0)
                    {{ $i = 0 }}
                    @foreach ($data as $index => $d)

                    <tr class="text-center">
                        <td class="text-white">{{ $i += 1 }}</td>
                        <td class="text-white">{{ $d->nama_product }}</td>
                        <td class="text-white">{{ $d->marketplace }}</td>
                        <td class="text-white">{{ $d->jumlah }}</td>
                        <td class="d-flex flex-row justify-content-around">
                            <form action="{{ route('deleteOrder') }}" method="post">
                                @csrf
                                <input type="hidden" value="{{ $d->id }}" name="id">
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

            @endif
        </div>
    </div>
</div>
@endsection