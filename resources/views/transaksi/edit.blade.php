@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-8 col-md-8 mb-2">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Item</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>
                    No
                  </th>
                  <th>
                    Kode Unik
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Harga
                  </th>
                  <th>
                    Qty
                  </th>
                  <th>
                    Subtotal
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($itemorder->cart->detail as $cart)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $itemorder->kode_unik }}</td>
                  <td>{{ $cart->produk->nama }}</td>
                  <td class="text-right">{{ $cart->produk->harga }}</td>
                  <td class="text-right">{{ $cart->qty }}</td>
                  <td class="text-right">{{ $cart->subtotal }}</td>
                </tr>
                @endforeach
                <tr>
                  <td colspan="5">
                    <b>Total</b>
                  </td>
                  <td class="text-right">
                    <b>Rp. {{ number_format($itemorder->cart->total, 2) }}</b>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer">
          <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-danger">Tutup</a>
        </div>
      </div>
    </div>
    <div class="col col-lg-4 col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tracking</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <form action="{{ route('transaksi.update', $itemorder->id) }}" method="POST">
                @method('patch')
                @csrf
              <tbody>
                <tr>
                  <td>
                    Nama
                  </td>
                  <td>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $itemorder->nama }}">
                  </td>
                </tr>
                <tr>
                  <td>
                    Jenis Kendaraan
                  </td>
                  <td>
                    <input type="text" name="kendaraan" id="kendaraan" class="form-control" value="{{ $itemorder->jenis_kendaraan }}">
                  </td>
                </tr>
                <tr>
                  <td>
                    Nomor Plat
                  </td>
                  <td>
                    <input type="text" name="plat" id="plat" class="form-control" value="{{ $itemorder->plat_nomor }}">
                  </td>
                </tr>
                <tr>
                  <td>
                    Total
                  </td>
                  <td>
                    <input type="text" name="total" id="total" class="form-control" value="{{ $itemorder->cart->total }}">
                  </td>
                </tr>
                <tr>
                  <td>
                    Status Pembayaran
                  </td>
                  <td>
                    <div class="form-group">
                      {{-- <label for="stats">
                        Status Pembayaran
                      </label> --}}
                      <select id="stats" name="status_pembayaran" class="form-control">
                        <option value="sudah"{{ $itemorder->cart->status_pembayaran == 'sudah' ? 'selected':'' }}>Sudah Dibayar</option>
                          <option value="belum"{{ $itemorder->cart->status_pembayaran == 'belum' ? 'selected':'' }}>Belum Dibayar</option>
                      </select>

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
                    <div class="form-group">
                      <select name="status_cart" id="status" class="form-control">
                        <option value="Checkout"{{ $itemorder->cart->status_cart == 'Checkout' ? 'selected':'' }}>Checkout</option>
                        <option value="Menunggu montir"{{ $itemorder->cart->status_cart == 'Menunggu montir' ? 'selected':'' }}>Menunggu Montir</option>
                        <option value="Diproses"{{ $itemorder->cart->status_cart == 'Diproses' ? 'selected':'' }}>Diproses</option>
                        <option value="Selesai"{{ $itemorder->cart->status_cart == 'Selesai' ? 'selected':'' }}>Selesai</option>
                        <option value="Diambil Customer"{{ $itemorder->cart->status_cart == 'Diambil Customer' ? 'selected':'' }}>Diambil Customer</option>
                      </select>
                    </div>
                    </td>
                </tr>
                <tr>
                  <td>
                  </td>
                  <td>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </td>
                </tr>
              </tbody>
              </form>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection