@extends('layouts.customer')

@section('container')
{{-- <link rel="stylesheet" href="/css/about.css"> --}}

<link rel="stylesheet" href="{{ asset('css/tracking.css') }}">

<div class="tracking-container">
      <div class="tracking-title">
        <h1>About Us</h1>
      </div>
  </div>
    <div class="container">
      <div class="row d-flex">
        <div class="about-wrapper">
          <div class="about-text-wrapper">
            <div class="col text-center pb-4">
              <h1 style="font-weight: 700">Toko Bengkel</h1>
              <p style="font-size: 1.6rem">Media website penyedia layanan yang berfokus pada penjualan sparepart barang kendaraan  seperti Ban, Oli dan sebagainya. Kami siap memberikan pelayanan yang lengkap dan original. Dengan pengalaman yang telah didapat, kami siap memberikan pelayanan yang lebih lengkap dan menyeluruh dengan berbagai keunggulan baru bagi setiap pelanggan.</p>
            </div>
          </div>
            {{-- <div class="about-image">
              {{-- <div class="col-md-5"> --
                <img class="imgimage"
                  src="{{asset('images/LogoTokoBengkel.png')}}"
                >
              {{-- </div> --
            </div> --}}
        </div>
      </div>
    </div>


{{-- <section>
<div class="about-container">
      <div class="about-title">
        <h1>ABOUT US</h1>
      </div>
      <div class="about-wrapper">
        <div class="about-text-wrapper">
          <h1>Lorem Ipsum</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div class="about-image">
          <img class="imgimage"
            src="{{asset('images/LogoTokoBengkel.png')}}"
          >
        </div>
      </div>
    </div>
  </section> --}}

@endsection