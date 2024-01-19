@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">

  <!-- table produk baru -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                {{-- <th>Kode</th> --}}
                <th>Nama</th>
                {{-- <th>Kategori</th> --}}
                <th>Qty</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($itemproduk as $item) 
              <tr>
                <td>{{ ++$no }}</td>
                {{-- <td>PRO-1</td> --}}
                <td>{{ $item->nama}} </td>
                {{-- <td>{{ $itemkategori->nama_kategori }}</td> --}}
                <td>{{ $item->stok}} </td>
                <td>{{ $item->harga}} </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection