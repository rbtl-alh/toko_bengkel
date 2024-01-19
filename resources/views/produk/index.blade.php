@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <!-- table produk -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Produk</h4>
          <div class="card-tools">
            <a href="{{ URL('/admin/produk/create') }}" class="btn btn-sm btn-primary">
              Baru
            </a>
          </div>
        </div>
        {{-- <div class="card-body"> --}}
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
          {{-- <form action="#">
            <div class="row">
              <div class="col">
                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="ketik keyword disini">
              </div>
              <div class="col-auto">
                <button class="btn btn-primary">
                  Cari
                </button>
              </div>
            </div>
          </form> --}}
        {{-- </div> --}}
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="50px">No</th>
                  <th>Gambar</th>
                  {{-- <th>Kode</th> --}}
                  <th>Nama</th>
                  <th>Jumlah Produk</th>
                  <th>Harga</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($itemproduk as $produk)
                <tr>
                  <td>{{ ++$no }}</td>
                  <td>
                    {{-- <img src="{{ asset('images/oli motor_1.png') }}" alt="produk 1" width='150px'> --}}
                    {{-- <img src="{{ "http://127.0.0.1:8000/". $produk->foto }}" alt="produk 1" width='150px'> --}}
                    @if($produk->foto != null)
                      <img src="{{ \Storage::url($produk->foto) }}" alt="{{ $produk->nama_produk }}" width='150px' class="img-thumbnail">
                    @endif
                    
                    {{-- <div class="row mt-2">
                      <div class="col">
                        <input type="file" name="gambar" id="gambar">
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-sm btn-primary">Upload</button>
                      </div>
                    </div> --}}
                  </td>
                  {{-- <td>{{ $itemkategori->nama_kategori }}</td> --}}
                  <td>{{ $produk->nama }}</td>
                  <td>{{ $produk->stok }}</td>
                  <td>{{ $produk->harga }}</td>
                  <td>
                    <a href="{{ route('produk.show', $produk->id) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                      Detail
                    </a>
                    <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                      Edit
                    </a>
                    <form action="{{ route('produk.destroy', $produk->id) }}" method="post" style="display:inline;">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-sm btn-danger mb-2">
                        Hapus
                      </button>                    
                    </form>
                  </td>
                </tr>
                <tr>
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