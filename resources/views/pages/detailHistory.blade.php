@extends('layouts.customer')

@section('tittle', 'History')

@section('container')
<link href="{{ asset('css/detailHistory.css') }}" rel="stylesheet">
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col header">
                <div class="about-title">
                    <h1>History</h1>
                </div>
            </div>
        </div>
    </div>
    
    {{-- @foreach ($itemorder as $item)  --}}
    <div class="container">
    <div class="row justify-content-md-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <td>{{($itemorder->created_at)->format('d-m-Y')}}</td>
                
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            {{-- <div class="card-header" style="background-color: white !important">
                                Detail Produk
                            </div> --}}
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Produk</th>
                                        <th scope="col">Harga</th>
                                      </tr>
                                    </thead>
                                    @foreach ($itemorder->cart->detail as $cart)
                                    <tbody>
                                      <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $cart->produk->nama }}</td>
                                        <td>{{ $cart->produk->harga }}</td>
                                      </tr>
                                    @endforeach
                                      <tr>
                                        <td colspan="2"> <b>Total</b> </td>
                                        <td>Rp. {{ number_format($itemorder->cart->total, 2) }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                      <form>
                                      <tbody>
                                        <tr>
                                          <td>
                                            Kode Unik
                                          </td>
                                          <td>
                                            <input  readonly type="text" name="nama" id="nama" class="form-control" value="{{ $itemorder->kode_unik }}">
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Jenis Kendaraan
                                          </td>
                                          <td>
                                            <input readonly type="text" name="kendaraan" id="kendaraan" class="form-control" value="{{ $itemorder->jenis_kendaraan }}">
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Nomor Plat
                                          </td>
                                          <td>
                                            <input readonly type="text" name="plat" id="plat" class="form-control" value="{{ $itemorder->plat_nomor }}">
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Status Pembayaran
                                          </td>
                                          <td>
                                            <input readonly type="text" name="plat" id="plat" class="form-control" value="{{ $itemorder->cart->status_pembayaran }}">
                                          </td>
                                            {{-- <td>
                                              Status Pembayaran
                                            </td>
                                            <td>
                                              <select name="status_pembayaran" id="status_pembayaran" class="form-control">
                                                <option value="sudah">Sudah Dibayar</option>
                                                <option value="belum">Belum Dibayar</option>
                                              </select>
                                            </td> --}}
                                          </div>
                                        </tr>
                                        <tr>
                                          <td>
                                            Status
                                          </td>
                                          <td>
                                            <input readonly type="text" name="plat" id="plat" class="form-control" value="{{ $itemorder->cart->status_cart }}">
                                            </td>
                                        </tr>
                                      </tbody>
                                      </form>
                                    </table>
                                  </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-2">
                        <a href="{{ route('history.index') }}" class="btn btn-order">Kembali</a>
                      </div>
                    </div>

                </div>
              </div>
            </div>
        </div>            

    </div>
</div>
</div>
        {{-- @endforeach --}}
</section>

@endsection