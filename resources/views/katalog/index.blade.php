@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <!-- table kategori -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kategori Produk</h4>
          <div class="card-tools">
            {{-- <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-primary"> --}}
            <a href="{{ route('katalog.create') }}" class="btn btn-sm btn-primary">
              Baru
            </a>
          </div>
        </div>
        {{-- <div class="card-body">
          <form action="#">
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
          </form>
        </div> --}}
        <div class="card-body">
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
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="50px">No</th>
                  <th>Gambar</th>
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Jumlah Produk</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($itemkategori as $kategori) 
                <tr>
                  <td>{{++$no}}</td>
                  <td>
                    {{-- <img src="{{ asset('images/oli motor_1.png') }}" alt="kategori 1" width='150px'> --}}
                    {{-- <img src="{{ "http://127.0.0.1:8000/". $kategori->foto }}" width='150px'> --}}
                    {{-- {{ $kategori->foto }} --}}
                    {{-- <div class="row mt-2">
                      <div class="col">
                        <input type="file" name="gambar" id="gambar">
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-sm btn-primary">Upload</button>
                      </div>
                    </div> --}}
                       <!-- image kategori -->
                    @if($kategori->foto != null)
                    <img src="{{ \Storage::url($kategori->foto) }}" alt="{{ $kategori->nama_kategori }}" width='150px' class="img-thumbnail mb-2">
                    <br>
                    <form action="{{ url('/admin/imagekategori/'.$kategori->id) }}" method="post" style="display:inline;">
                      @csrf
                      {{ method_field('delete') }}
                      <button type="submit" class="btn btn-sm btn-danger mb-2">
                        Hapus
                      </button>                    
                    </form>
                    @else
                    <form action="{{ url('/admin/imagekategori') }}" method="post" enctype="multipart/form-data" class="form-inline">
                      @csrf
                      <div class="form-group">
                        <input type="file" name="image" id="image">
                        <input type="hidden" name="kategori_id" value={{ $kategori->id }}>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary">Upload</button>
                      </div>
                    </form>
                    @endif
                    <!-- end image kategori -->
                  </td>
                  <td>{{ $kategori->kode_kategori }}</td>
                  <td>{{ $kategori->nama_kategori }}</td>
                  <td>{{ $kategori->jumlah }}</td>
                  <td>
                    
                    <a href="{{ route('katalog.edit', $kategori->id) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                      {{-- <a href="#" class="btn btn-sm btn-primary mr-2 mb-2"> --}}
                      Edit
                    </a>
                    <form action="{{ route('katalog.destroy', $kategori->id) }}" method="post" style="display:inline;">
                      @method('delete')
                      @csrf
                      
                      <button type="submit" class="btn btn-sm btn-danger mb-2">
                        Hapus
                      </button>                    
                    </form>
                  </td>
                </tr>
                @endforeach
                {{-- <tr>
                  <td>2</td>
                  <td>
                    <img src="{{ asset('images/slide1.jpg') }}" alt="kategori 1" width='150px'>
                    <div class="row mt-2">
                      <div class="col">
                        <input type="file" name="gambar" id="gambar">
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-sm btn-primary">Upload</button>
                      </div>
                    </div>
                  </td>
                  <td>KATE-2</td>
                  <td>Baju Wanita</td>
                  <td>20 Produk</td>
                  <td>
                    {{-- <a href="{{ route('kategori.edit', 2) }}" class="btn btn-sm btn-primary mr-2 mb-2"> 
                    <a href="#" class="btn btn-sm btn-primary mr-2 mb-2">
                      Edit
                    </a>
                    <button class="btn btn-sm btn-danger mb-2">
                      Hapus
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <img src="{{ asset('images/slide1.jpg') }}" alt="kategori 1" width='150px'>
                    <div class="row mt-2">
                      <div class="col">
                        <input type="file" name="gambar" id="gambar">
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-sm btn-primary">Upload</button>
                      </div>
                    </div>
                  </td>
                  <td>KATE-3</td>
                  <td>Baju Wanita</td>
                  <td>20 Produk</td>
                  <td>
                    {{-- <a href="{{ route('kategori.edit', 2) }}" class="btn btn-sm btn-primary mr-2 mb-2"> --
                    <a href="#" class="btn btn-sm btn-primary mr-2 mb-2">
                      Edit
                    </a>
                    <button class="btn btn-sm btn-danger mb-2">
                      Hapus
                    </button>
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