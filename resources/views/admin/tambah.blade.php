@extends('admin.navbarAdmin')

@section('tittle', 'Order')

@section('container')
<link href="{{ asset('css/tambah.css') }}" rel="stylesheet">
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col header">
                <div class="about-title">
                    <h1>Tambah Product</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-sm-8">
                <div class="card px-4">
                    <div class="card-body">
                   
                        <form>
                            <div class="form-group pb-3">
                              <label for="nama">Nama Product</label>
                              <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                            </div>
                            <div class="form-group pb-3">
                              <label for="ket">Deskripsi Product</label>
                              <input type="text" class="form-control" id="ket" placeholder="Masukkan deskripsi">
                            </div>
                            <div class="form-group pb-3">
                              <label for="nomor">Merk</label>
                              <input type="text" class="form-control" id="nomor" placeholder="Masukkan merk">
                            </div>
                            <div class="form-group pb-3">
                              <label for="kendaraan">Stok</label>
                              <input type="text" class="form-control" id="kendaraan" placeholder="Masukkan stok">
                            </div>
                            <div class="form-group pb-3">
                                <label for="plat">Harga</label>
                                <input type="text" class="form-control" id="plat" placeholder="Masukkan harga">
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Foto Product</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                            </div>
                            <div class="col-md-12 text-center py-3">
                                <button type="submit" class="btn btn-light px-4">Tambah</button>
                            </div>
                        </form>
                    </div>
                  </div>
            
            </div>
        </div>
    </div>
</section>

@include('components.footer')


@endsection