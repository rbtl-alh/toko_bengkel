@extends('layouts.customer')

@section('tittle', 'Toko Bengkel')

@section('container')
<link rel="stylesheet" href="/css/detailProduk.css">

<section class="container-fluid">
  <div class="row">
    <div class="header">
        <h1 class="title">Produk</h1>
    </div>
  </div>
  <div class="container pt-4">
    {{-- ///////////////card-1/////////// --}}
    <div class="row justify-content-sm-center rowmain pb-4">
      <div class="col-8">
        <div class="card">
          <div class="row rowcard">
              <div class="col-4">
                <img
                      alt="gambar"
                      src="{{ \Storage::url($itemproduk->foto) }}"
                      class="img-fluid d-block"
                    >
              </div>
              <div class="col-sm-8 pb-3">
                <h3 class="pt-4">{{$itemproduk->nama}}</h3>
                    <div>{{$itemproduk->deskripsi}}</div>
                    <div>Merek : {{$itemproduk->merk}}</div>
                      <div>Harga</div>
                      <h5>Rp. {{number_format($itemproduk->harga)}}</h5>

                    {{-- <div class="pb-4">
                        <div class="pe-3 pb-4"> Jumlah : </div>
                    </div> --}}
            </div>
            <div class="col-8 button pt-4">
              <div class="produt-buttonAddMinTrash pt-4 mt-4">
                {{-- <div class="col-auto" style="margin-right: 3rem">
                    <input type="text" class="form-control text-center" style="width: 70px">
                  </div> --}}
                {{-- <div class="px-4">
                    <button class="btn btn-primary">Beli Sekarang</button>
                </div>  --}}
                <form action="{{ route('cartdetail.store') }}" method="POST">
                  @csrf
                  <input type="hidden" name="produk_id" value={{$itemproduk->id}}>
                  <button class="btn btn-block mt-4 cart" type="submit" style="background-color: #003d33; color: #F1C066">
                      <i class="fa fa-shopping-cart"></i> Tambahkan Ke Keranjang
                  </button>
                </form>
                <form action="#" method="POST">
                  @csrf
                  <input type="hidden" name="produk_id" value={{$itemproduk->id}}>
                  {{-- <div class="px-4">
                    <button class="btn btn-primary">Beli Sekarang</button>
                  </div>  --}}
                </form>

                {{-- <a href="/cart" class="btn btn-primary" >Tambah ke Trolley</a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     
    </div>
  
</section>

{{-- @include('components.footer') --}}

<script>
  let counterDisplayElem = document.querySelector('.counter-display');
  let counterMinusElem = document.querySelector('.counter-minus');
  let counterPlusElem = document.querySelector('.counter-plus');

  let count = 0;

  updateDisplay();

  counterPlusElem.addEventListener("click",()=>{
      count++;
      updateDisplay();
  }) ;

  counterMinusElem.addEventListener("click",()=>{
      count--;
      updateDisplay();
  });

  function updateDisplay(){
      counterDisplayElem.innerHTML = count;
  };
</script>

{{-- <script>
  feather.replace()
</script>
<script src="path/to/dist/feather.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script> --}}
@endsection