@extends('layouts.customer')

@section('tittle', 'Toko Bengkel')

@section('container')
<link rel="stylesheet" href="/css/trolley.css">

<section class="container-fluid">
  <div class="row">
    <div class="header">
        <h1 class="title " style="padding-left: 5rem">Trolley</h1>
    </div>
  </div>
  <div class="container pt-4">
    <div class="row justify-content-center mx-auto">
      <div class="col-10 mx-auto">
        <div class="card">
          <div class="card-body">
            <h2 class="text-center">Trolley masih kosong!</h2>
            <h2 class="text-center">Silahkan memilih produk lebih dulu</h2>
          </div>
        </div>
      </div>
    </div>
  </div>




    
     
        {{-- ////////////button order///////////// --}}
        <div class="row row-button justify-content-sm-center">
          <div class="col-md-12 text-center py-4">
            <a href="{{ route('product.index') }}" class="btn-order btn btn-outline-dark">Pilih produk</a>
          </div>
        </div>
      
    </div>
  
</section>

{{-- @include('components.footer') --}}



{{-- <script>
  feather.replace()
</script>
<script src="path/to/dist/feather.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script> --}}
@endsection