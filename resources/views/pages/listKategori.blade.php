@extends('layouts.customer')

@section('tittle', 'Toko Bengkel')


@section('container')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">


<section class="py-5 container-fluid">
    <div class="row">
        <div class="header">
            <h1 class="text-center">Katalog Produk</h1>
            <div class="row g-3 align-items-center justify-content-sm-center">
                {{-- <div class="search-container">
                    <form action="/action_page.php">
                      <input type="text" placeholder="Search.." name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                  </div> --}}
                <div class="col-auto">
                    <form>
                        <input class="form-control" type="search" placeholder="Cari Produk" aria-label="Search">
                    </form>
                </div>
                <div class="col-auto">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <!-- produk Terbaru-->
    <div class="row mt-4">
        <!--/////////////kategori///////////-->
        @if(isset($listkategori))
        <div class="col-md-6 no-gutters mx-auto">
            <div class="card card-kategori" style="border-radius: 15px">
                <div class="btn btn-kateogri">
                    <img 
                        src="{{ \Storage::url($itemkategori->foto) }}"  
                        alt="" 
                        class="d-block m-auto icon-size" 
                        style="max-width: 170px; width: 100%;"
                    />
                    <h4 class="text-center" style="font-size: 2rem" >{{ $itemkategori->nama_kategori }}</h4>
                </div>
            </div>
        </div>
        @else
            <h3>Semua Kategori</h3>
        @endif
    </div>

      <!--/////////////produk///////////-->
      <div class="row mt-4">
      {{-- @if() --}}
      @foreach ($itemproduk as $produk)       
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <a href="/produk/{{ $produk->id }}">
            {{-- <img src="{{ 'http://127.0.0.1:8000/' . $produk->foto }}" alt="foto produk" class="card-img-top" style="height: 220px"> --}}
            <img src="{{ \Storage::url($produk->foto) }}" alt="foto produk" class="card-img-top" style="height: 265px">
          </a>
          <div class="card-body">
            <a href="/produk/{{ $produk->id }}" class="text-decoration-none">
              <p class="card-text" style="color: #003d33">
                {{$produk->nama}}
              </p>
            </a>
            <div class="row mt-4">
              <div class="col">
                {{-- <button class="btn btn-light">
                  <i class="far fa-heart"></i>
                </button> --}}
              </div>
              <div class="col-auto">
                <p>
                  Rp. {{number_format($produk->harga)}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
     
  </div>
{{-- <div class="container">
    <div class="row">
        <div class="col-md-4 p-4">
            <div class="card">
                <img src="{{ asset('images/banMobil_1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{ url('/product/detail') }}" class="btn btn-primary">Detail Produk</a>
                </div>
            </div>    
        </div>    
        <div class="col-md-4 p-4">
            <div class="card">
                <img src="{{ asset('images/banMobil_1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>    
        </div>    
        <div class="col-md-4 p-4">
            <div class="card">
                <img src="{{ asset('images/oli motor_1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>    
        </div>         
        <div class="col-md-4 p-4">
            <div class="card">
                <img src="{{ asset('images/oli motor_1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>    
        </div>
        <div class="col-md-4 p-4">
            <div class="card">
                <img src="{{ asset('images/banMobil_1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>    
        </div>
        <div class="col-md-4 p-4">
            <div class="card">
                <img src="{{ asset('images/banMobil_1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>    
        </div>                 
    </div>  
</div> --}}
</section>

{{-- @include('components.footer') --}}

@endsection