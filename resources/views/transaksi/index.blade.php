@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            Data Tracking
          </h3>
        </div>
        <div class="card-body">
          <!-- digunakan untuk menampilkan pesan error atau sukses -->
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
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Unik</th>
                  <th>Nama</th>
                  <th>Tanggal Pemesanan</th>
                  <th>Status Kendaraan</th>
                  <th>Total</th>
                  <th>Status Pembayaran</th>
                  <th>Action</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($itemorder as $order)
                
                <tr>
                  <td>
                    {{ $no++ }}
                  </td>
                  <td>
                    {{ $order->kode_unik }}
                  </td>
                  <td>
                    {{ ($order->nama) }}
                  </td>
                  <td>
                    {{ ($order->created_at) }}
                  </td>
                  <td>
                    {{ ($order->cart->status_cart) }}
                  </td>
                  <td>
                    {{ number_format($order->cart->total, 2) }}
                  </td>                  
                  <td>
                    {{ $order->cart->status_pembayaran }}
                  </td>
                  {{-- <td>
                    {{ $order->cart->status_pengiriman }}
                  </td> --}}
                  <td>
                    {{-- <a href="{{ route('transaksi.show', $order->id) }}" class="btn btn-sm btn-info mb-2">
                      Detail
                    </a> --}}
                    @if($itemuser->role == 'admin')
                    <a href="{{ route('transaksi.edit', $order->id) }}" class="btn btn-sm btn-primary mb-2">
                      Edit
                    </a>
                    @endif
                  </td>
                </tr>
              @endforeach
                {{-- <tr>
                  <td>
                    1
                  </td>
                  <td>
                    Inv-01
                  </td>
                  <td>
                    Rara
                  </td>
                  <td>
                    2021-06-09               
                  </td>
                  <td>
                    Chekout
                  </td>
                  <td>
                    <a href="{{ route('transaksi.show', 1) }}" class="btn btn-sm btn-danger mb-2">
                      Delete
                    </a>
                    <a href="{{ route('transaksi.edit', 1) }}" class="btn btn-sm btn-primary mb-2">
                      Edit
                    </a>
                  </td>
                </tr> --}}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection