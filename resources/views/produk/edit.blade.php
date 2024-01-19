@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Edit Produk</h3>
          <div class="card-tools">
            <a href="{{ URL('/admin/produk') }}" class="btn btn-sm btn-danger">
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
          <form action="{{ route('produk.update', $itemproduk->id) }}" method="POST" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="form-group pb-3">
              <label for="kategori_id">Kategori Produk</label>
              <select name="kategori_id" id="kategori_id" class="form-control">
                <option value="">Pilih Kategori</option>
                @foreach($itemkategori as $kategori)
                  <option value={{ $kategori->id }}>{{ $kategori->nama_kategori }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group pb-3">
                <label for="nama">Nama Product</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" value="{{ $itemproduk->nama }}">
              </div>
              <div class="form-group pb-3">
                <label for="nomor">Merk</label>
                <input type="text" class="form-control" id="nomor" placeholder="Masukkan merk" name="merk" value="{{ $itemproduk->merk }}">
              </div>
              <div class="form-group pb-3">
                <label for="kendaraan">Stok</label>
                <input type="text" class="form-control" id="kendaraan" placeholder="Masukkan stok" name="stok" value="{{ $itemproduk->stok }}">
              </div>
              <div class="form-group pb-3">
                  <label for="plat">Harga</label>
                  <input type="text" class="form-control" id="plat" placeholder="Masukkan harga" name="harga" value="{{ $itemproduk->harga }}">
              </div>
              {{-- <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control">
              </div> --}}
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control" name="deskripsi">{{ $itemproduk->deskripsi }}</textarea>
              </div>
            {{-- <div class="form-group">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" name="nama_produk" id="nama_produk" class="form-control">
            </div>
            <div class="form-group">
              <label for="slug_produk">Slug Produk</label>
              <input type="text" name="slug_produk" id="slug_produk" class="form-control">
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
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