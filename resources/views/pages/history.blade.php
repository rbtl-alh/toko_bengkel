@extends('layouts.customer')

@section('tittle', 'History')

@section('container')
<link href="{{ asset('css/history.css') }}" rel="stylesheet">
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

                  <a href="{{ route('history.show', $item->id) }}" class="btn btn-primary">Detail</a>
            </div>
            </div>
        </div>            
        {{-- <div class="row pt-4 g-3 align-items-center justify-content-sm-center">
            <table class="table table-borderless">
                <tr>
                    <td class="ket">Nama</td>
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
                <tr>
                    <td class="ket">Tanggal Pemesanan</td>
                    {{-- <td>{{($item->created_at)}}</td> --
                    <td>{{($item->created_at)->format('d-m-Y')}}</td>
                </tr>
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
        </div> --}}
    </div>
</div>
</div>
        @endforeach
        {{-- <div class="card">
            <div class="card-header">
                29-01-2021
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Riwayat order</a>
            </div>
        </div> --}}
    

</section>

@endsection