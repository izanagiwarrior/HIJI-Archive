@extends('layouts.dashboard_layout')

@section('title', 'Marketplace')

@section('content')

<div class="col px-5" style="height:80vh">
     <div class="row my-4">
          <div class="col">
               <h4 class="text-white text-center m-0">Marketplace</h4>
          </div>
     </div>
     <div class="row" style="height: 100%">
          <div class="w-100" style="border-radius: 30px; background-color:#232228; padding:30px">
               @if (count($marketplace) === 0)
               <div class="d-flex justify-content-center">
                    <p class="text-muted">There is no data....</p>
               </div>
               <div class="d-flex justify-content-center">
                    <a href="{{route('addMarketplace')}}" class="btn btn-dark">Add Marketplace</a>
               </div>

               @elseif (count($marketplace) > 0)

               {{ $i = 0 }}
               <div class="container d-flex">
                    <a href="{{route('addMarketplace')}}" class="btn btn-dark">Add Marketplace</a>
               </div>
               <br>
               <div class="container d-flex justify-content-center">
                    <table class="table table-striped">
                         <tr class="bg-dark text-white text-center">
                              <th>#</th>
                              <th>Nama Marketplace</th>
                              <th>Nama Toko</th>
                              <!-- <th>Action</th> -->
                         </tr>

                         @foreach ($marketplace as $index => $marketplace)

                         <tr class="text-center">
                              <td class="text-white">{{ $i += 1 }}</td>
                              <td class="text-white">{{ $marketplace->nama_marketplace }}</td>
                              <td class="text-white">{{ $marketplace->nama_toko }}</td>
                              <td class="d-flex flex-row justify-content-around">
                                   <a href="{{ route('updateMarketplace',$marketplace->id) }}"
                                        class="btn btn-primary">Edit</a>

                                   &nbsp;&nbsp

                                   <form action="{{ route('deleteMarketplace') }}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{ $marketplace->id }}" name="id">
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