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
    {{-- ///////////////card-1/////////// --}}
    @foreach($itemcart->detail as $detail)
    <div class="row justify-content-sm-center rowmain">
      <div class="col-8">
        <div class="card">
          
          <div class="row rowcard">
              <div class="col-4">
                <img
                      alt="gambar"
                      src="{{ \Storage::url($detail->produk->foto) }}"
                      class="img-fluid d-block"
                    >
              </div>
              <div class="col-sm-8">
                <h3 class="pt-4">{{ $detail->produk->nama }}</h3>
                    <p>{{ $detail->produk->deskripsi }}</p>
                    <div>Merk : {{ $detail->produk->merk }}</div>
                    
                    {{-- <div class="d-flex">
                      <div class="pe-3"> Jumlah : </div>
                      <div class="counter-display hitung text-center">(..)</div>
                    </div> --}}
                    <div class="product-harga">
                      <div>Harga</div>
                      <p>Rp. {{ number_format($detail->harga, 2) }} </p>
                    </div>
                    
                    <div class="inline d-flex pb-2">
                      <form action="{{ route('cartdetail.update', $detail->id) }}" method="post" class="me-2">
                        @method('patch')
                        @csrf()
                          <input type="hidden" name="param" value="kurang">
                          <button class="counter-plus counter-minus btn btn-sm px-2" style="background-color: #003d33; color: #F1C066">
                          -
                          </button>
                      </form>
                      {{-- <button class="btn btn-outline-primary btn-sm" disabled="true" value="{{ number_format($itemcart->qty, 2) }}">
                        {{ number_format($itemcart->qty, 2) }}
                      </button> --}}
                      <form>
                        <input class="form-control text-center" style="width: 3rem" value="{{ $detail->qty }}">
                      </form>
                      <form action="{{ route('cartdetail.update', $detail->id) }}" method="post" class="ms-2">
                        @method('patch')
                        @csrf()
                          <input type="hidden" name="param" value="tambah">
                          <button class="btn btn-sm" style="background-color: #003d33; color: #F1C066">
                          +
                          </button>
                      </form>
                    </div>

                    <div class="pb-4">
                      <p>Subtotal: Rp.{{ number_format($detail->subtotal, 2) }}</p>
                    </div>
            </div>
            <div class="col-4 button">
              <div class="produt-buttonAddMinTrash">
                <form action="{{ route('cartdetail.destroy', $detail->id) }}" method="post" style="display:inline;">
                  @csrf
                  {{ method_field('delete') }}
                  <button type="submit" class="btn btn-sm btn-danger mb-2">
                    Hapus
                  </button>                    
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach

    
    <div class="mt-4 col-4 justify-content-end">
      <form action="{{ url('kosongkan').'/'.$itemcart->id }}" method="post" class="justify-content-end">
        @method('patch')
        @csrf()
        <button type="submit" class="btn btn-danger btn-block kosong justify-content-end">Kosongkan</button>
      </form>
    </div>

    <div class="text-center mt-4">
      <h4>
        Total: Rp. {{ number_format($itemcart->total, 2) }}
      </h4>
    </div>

    
      {{-- /////////card 2///////////
      <div class="row justify-content-sm-center rowmain">
          <div class="col-8">
            <div class="card">
              <div class="row rowcard">
                  <div class="col-4">
                    <img
                          alt="gambar"
                          src="https://reparasimobil.com/wp-content/uploads/2020/11/c02f5b75d1-300x216.jpg"
                          class="img-fluid d-block"
                        >
                  </div>
                  <div class="col-sm-8">
                    <h3 class="pt-4">Ban</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div>Merek : Yamaha</div>
                        <div class="d-flex">
                          <div class="pe-3"> Jumlah : </div>
                          <div class="counter-display hitung text-center">(..)</div>
                        </div>
                        <div class="product-harga">
                          <div>Harga</div>
                          <h5>Rp 500.000 </h5>
                  </div>
                </div>
                <div class="col-4 button">
                  <div class="produt-buttonAddMinTrash">
                    <button class="counter-plus">+</button>
                    <button class="counter-minus">-</button>
                    <button class="counter-trash">sampah</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}

        {{-- ////////////button order///////////// --}}
        <div class="row row-button justify-content-sm-center">
          <div class="col-md-12 text-center py-4">
            <a href="{{ route('order.index') }}" class="btn-order btn btn-outline-dark">Order</a>
          </div>
        </div>
      
    </div>
  
</section>

{{-- @include('components.footer') --}}

<script>
  
  // let counterDisplayElem = document.querySelector('.counter-display');
  // let counterMinusElem = document.querySelector('.counter-minus');
  // let counterPlusElem = document.querySelector('.counter-plus');

  // let count = 0;

  // updateDisplay();

  // counterPlusElem.addEventListener("click",()=>{
  //     count++;
  //     updateDisplay();
  // }) ;

  // counterMinusElem.addEventListener("click",()=>{
  //     count--;
  //     updateDisplay();
  // });

  // function updateDisplay(){
  //     counterDisplayElem.innerHTML = count;
  // };
</script>

{{-- <script>
  feather.replace()
</script>
<script src="path/to/dist/feather.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script> --}}


@endsection