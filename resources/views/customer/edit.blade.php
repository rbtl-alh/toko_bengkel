@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Customer</h3>
          <div class="card-tools">
            <a href="{{ URL('/admin/customer') }}" class="btn btn-sm btn-danger">
              Tutup
            </a>
          </div>
        </div>
        <div class="card-body">
          @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              <div class="alert alert-warning">{{ $error }}</div>
          @endforeach
          @endif
          @if ($message = Session::get('error'))
              <div class="alert alert-warning">
                  <p>{{ $message }}</p>
              </div>
          @endif
          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif
          <form action="{{ route('customer.update', $itemuser->id) }}" method="POST">
            @method('patch')
            @csrf
          <div class="">
            <div class="">
              <label for="name">Nama</label>
              <input type="text" name="name" id="name" class="form-control" value="{{ $itemuser->name }}">
            </div>
            <div class="">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control" value="{{ $itemuser->email }}">
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role" class="form-control">
                    <option value="admin"{{ $itemuser->role == 'admin' ? 'selected':'' }}>Admin</option>
                    <option value="member"{{ $itemuser->role == 'member' ? 'selected':'' }}>Member</option>
                </select>
            </div>
            {{-- <div class="form-group">
              <label for="foto">Foto</label>
              <input type="file" name="foto" id="jumlah" class="form-control" value="{{ $itemkategori->jumlah }}"">
            </div> --}}
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Update</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection