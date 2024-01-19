@extends('admin.navbarAdmin')

@section('tittle', 'Edit tracking')

@section('container')
<link href="{{ asset('css/editTracking.css') }}" rel="stylesheet">
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col header">
                <div class="about-title">
                    <h1>Edit Tracking</h1>
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
                              <label for="nama">Nama</label>
                              <input type="text" class="form-control" id="nama" placeholder="Nama">
                            </div>
                            <div class="form-group pb-3">
                              <label for="ket">Jenis kendaraan</label>
                              <input type="text" class="form-control" id="ket" placeholder="Jenis kendaraan">
                            </div>
                            <div class="form-group pb-3">
                              <label for="nomor">Nomor plat</label>
                              <input type="text" class="form-control" id="nomor" placeholder="Nomor plat">
                            </div>
                            <div class="form-group pb-3">
                              <label for="kendaraan">Waktu order</label>
                              <input type="text" class="form-control" id="kendaraan" placeholder="Waktu order">
                            </div>
                            <div class="form-group pb-3">
                                <label for="plat">Harga total</label>
                                <input type="text" class="form-control" id="plat" placeholder="Harga total">
                            </div>
                            <div class="form-group pb-3">
                                <label for="plat">Status kendaraan</label>
                                <input type="text" class="form-control" id="plat" placeholder="Status kendaraan">
                            </div>
                            <div class="col-md-12 text-center py-3">
                                <button type="submit" class="btn btn-light px-4">Submit</button>
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