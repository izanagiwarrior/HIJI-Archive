@extends('layouts.admin')

@section('title', 'Admin : User Manager')

@section('content')

{{ $i = 0 }}
<div class="col px-5" style="height:80vh">
     <div class="row my-4">
          <!-- <input type="text" placeholder="search..." style="background-color:#232228;color:white;border-radius: 8px;border:1px solid #232228; padding:3px"> -->
          <div class="col">
               <h4 class="text-white text-center m-0">User Manager</h4>
          </div>
     </div>
     <div class="row" style="height: 100%">
          <div class="w-100 text-white" style="border-radius: 30px; background-color:#232228; padding:30px">
               <table class="table table-striped">
                    <tr class="bg-dark text-white">
                         <th>#</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>User</th>
                         <th>Action</th>
                    </tr>

                    @foreach ($user as $index => $product)

                    <tr>
                         <td>{{ $i += 1 }}</td>
                         <td>{{ $product->name }}</td>
                         <td>{{ $product->email }}</td>
                         <td>
                              @if ($product->is_admin === 1)
                              {{ __('Admin') }}
                              @else
                              {{ __('User') }}
                              @endif
                         </td>
                         <td>
                              @if ($product->is_admin === 1)
                              {{ __('This is Admin Account') }}
                              @elseif ($product->name === 'User')
                              {{ __('This is Example User Account') }}
                              @else
                              <form action="{{ route('admin.userDelete') }}" method="post">
                                   @csrf
                                   <input type="hidden" value="{{ $product->id }}" name="id">
                                   <div class="form-inline">
                                        <a href="{{route('update.user', $product->id)}}" class="btn btn-warning btn-inline">Perbarui</a>
                                        <button class="ml-4 btn btn-danger btn-inline">Hapus</button>
                                   </div>
                              </form>
                         </td>
                         @endif
                    </tr>
                    @endforeach
               </table>
          </div>
     </div>
</div>
@endsection