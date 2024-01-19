@extends('layouts.customer')


@section('tittle', 'Toko Bengkel')


@section('container')
<link rel="stylesheet" href="{{ asset('css/tracking.css') }}">

<section class="">
      <div class="tracking-container">
        <div class="tracking-title">
          <h1>Tracking</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <form class="form-inline" type="get" action="{{url('/tracking/search')}}" method="GET">
                    <input name="search" class="form-control col-6" type="search" placeholder="Kode Unik" aria-label="Search">
                    <div class="py-4">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </div>
                  </form>
            </div>
        </div>
        @if(count($itemorder) > 0)
        @foreach ($itemorder as $item) 
        <div class="container">
          <div class="row justify-content-md-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">
                      <td>{{($item->created_at)->format('d-m-Y')}}</td>
                  </div>
                  <div class="card-body">
                      <table class="table table-borderless">
                          <tr>
                              <td class="ket">Kode Unik</td>
                              <td>{{ $item->kode_unik }}</td>
                          </tr>
                          <tr>
                              <td class="ket">Nama</td>
                              <td>{{ $item->nama }}</td>
                          </tr>
                          <tr>
                              <td class="ket">Jenis Kendaraan</td>
                              <td>{{ $item->jenis_kendaraan }}</td>
                          </tr>
                          <tr>
                              <td class="ket">Nomor Plat</td>
                              <td>{{ $item->plat_nomor }}</td>
                          </tr>
                          {{-- <tr>
                              <td class="ket">Tanggal Pemesanan</td>
                              {{-- <td>{{($item->created_at)}}</td> --
                              <td>{{($item->created_at)->format('d-m-Y')}}</td>
                          </tr> --}}
                          <tr>
                              <td class="ket">Harga Total</td>
                              <td>Rp. {{ number_format($item->cart->total) }}</td>
                          </tr>
                          <tr>
                              <td class="ket">Status Pembayaran</td>
                              <td>{{ $item->cart->status_pembayaran }}</td>
                          </tr>
                          <tr>
                              <td class="ket">Status Kendaraan</td>
                              <td>{{ $item->cart->status_cart }}</td>
                          </tr>
                        </table>
                  </div>
                  </div>
              </div>            
          </div>
      </div>
      </div>
       @endforeach
        @else
          <div class="col-6 mx-auto">
            <div class="card text-align text-center">
              <div class="card-body">
                <h3>Opps!</h3>
                <h3>Kode Unik tidak ditemukan...</h3>
                <img src="https://media.giphy.com/media/7NG9kIC79UAEpsthe3/giphy.gif" alt="stiker" style="width: 200px">
              </div>
            </div>
            <div class="text-center mx-auto pt-4" style="padding-bottom: 3rem">
              <a href="{{url('/tracking')}}" class="btn btn-outline-success" type="submit">Search something else</a>
            </div>
          </div>
        @endif
    </div>
    {{-- <div class="tracking-container">
          <div class="tracking-title">
            <h1>Tracking</h1>
          </div>
          <div class="tracking-contents">
            <form class="form-inline">
              <input class="form-control col-6" type="search" placeholder="Kode Unik" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
    
          <div class="container">
            <table class="table">
                <thead>
                  ...
                </thead>
                <tbody>
                  <tr class="table-active">
                    ...
                  </tr>
                  <tr>
                    ...
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2" class="table-active">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
          </div>
    </div> --}}
</section>

@endsection