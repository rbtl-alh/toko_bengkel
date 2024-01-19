@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            Data Customer
          </h3>
        </div>
        {{-- <div class="card-body">
          <form type="get" action="{{url('admin/customer/search')}}" method="GET">
            <div class="row">
              <div class="col">
                <input type="text" name="search" class="form-control" placeholder="ketik keyword disini">
              </div>
              <div class="col-auto">
                <button class="btn btn-primary">
                  Cari
                </button>
              </div>
            </div>
          </form>
        </div> --}}
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Role</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($user as $item)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->username }}</td>
                  <td>
                    {{ $item->role }}
                  </td>
                  <td>
                    <a href="{{route('customer.edit', $item->id)}}"  type="submit" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection