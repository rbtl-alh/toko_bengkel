
@extends('layouts/customer')

@section('container')
<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

<section class="container-fluid">
  <div class="row header">
    <div class="col-md-5 pb-4 px-4">      
      <h1>Toko</h1>
      <h1 class="pb-2">Bengkel</h1>
      <p class="welcome-desc">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
        culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <div class="button">
        <a href="#" class="btn btn-light">Order Now</a>
      </div>
    </div>
    <div class="col-md-6 mt-4">
      <img
            src="{{ asset('images/introduction.png') }}"
          />
    </div>
  
</div>
</section>

<section class="mb-4">

  <div class="container">
    <div class="row">
      <div class="col col-md-12 col-sm-12 mb-4">
        <h2 class="text-center" style="font-weight: 600; padding-top:3rem;">Rekomendasi</h2>
      </div>
    </div>
    <!-- produk Terbaru-->
  <div class="row mr-0 ml-0 mt-4">
    
    <!-- produk pertama -->
    @foreach ($itemproduk as $produk)    
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/satu') }}">
          <img src="{{ 'http://127.0.0.1:8000/' . $produk->foto }}" alt="foto produk" class="card-img-top" style="height: 220px">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
            <p class="card-text">
              {{ $produk->nama }}
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                {{ $produk->harga }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    {{-- <!-- produk kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/dua') }}">
          <img src="{{ asset('images/oli motor_1.png') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
            <p class="card-text">
              Produk Kedua
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 10.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/tiga') }}">
          <img src="{{ asset('images/oli motor_1.png') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/tiga') }}" class="text-decoration-none">
            <p class="card-text">
              Produk Ketiga
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 10.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- end produk terbaru -->
        {{-- <div class="row">
          <div class="col">
            <div class="mx-auto">
            <h1 style="font-weight: 600; padding-top:3rem;">Rekomendasi</h1>
            </div>
          </div>
        </div>
        <div class="row justify-content-md-center row-card">
          <div class="col-md-8 d-flex row-rekom">
            <div class="col-md-4 pb-4">
              <div class="card bg">
                <div class="card-body">
                  <div class="card rekom-card">
                    <img src="{{ asset('images/banMobil_1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">harga</p>                 
                    </div>
                </div>  
                </div>
              </div>
            </div>    
            <div class="col-md-4 pb-4">
              <div class="card bg">
                <div class="card-body">
                  <div class="card rekom-card">
                    <img src="{{ asset('images/banMobil_1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">harga</p>                 
                    </div>
                </div>  
                </div>
              </div>
            </div>    
            <div class="col-md-4 pb-4">
              <div class="card bg">
                <div class="card-body">
                  <div class="card rekom-card">
                    <img src="{{ asset('images/banMobil_1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">harga</p>                 
                    </div>
                </div>  
                </div>
              </div>
            </div>    
          </div>
        </div>      
      </div> --}}
</section>
          {{-- <div class="col-md-2 py-4 px-4 bg-card">
              <div class="card rekom-card">
                  <img src="{{ asset('images/banMobil_1.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">harga</p>                 
                  </div>
              </div>    
          </div>    
          <div class="col-md-2 py-4 px-4 bg-card">
              <div class="card rekom-card">
                  <img src="{{ asset('images/oli motor_1.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">harga</p>                  
                  </div>
              </div>    
          </div>                         --}}



   
<section class="row-kategori" id="menu">
  <div class="container p-4">
    <div class="row">
      <div class="col col-md-12 col-sm-12 mb-4">
        <h2 class="text-center" style="font-weight: 600;">Kategori Produk</h2>
      </div>
    </div>
      <div class="row mr-0 ml-0">
        @foreach ($itemkategori as $kategori)    
        <div class="col-4 no-gutters mx-auto">
            <a href="onGoing.html">
                <div class="card card-kategori">
                    <div class="btn btn-kateogri">
                        <img src="{{ 'http://127.0.0.1:8000/' . $kategori->foto }}"  alt="" class="d-block m-auto icon-size" />
                        <h4 class="text-center">{{ $kategori->nama_kategori }}</h4>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
          {{-- <div class="col-4 no-gutters mx-auto">
              <a href="emlink.html">
                  <div class="card card-kategori">
                      <div class="btn btn-kateogri">
                          <img src="{{ asset('images/Filter oli.png') }}" alt="" class="d-block m-auto icon-size" />
                          <h4 class=" text-center">Oli</h4>
                          
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-4 no-gutters mx-auto">
              <a href="style/index.html">
                  <div class="card card-kategori">
                      <div class="btn btn-kateogri">
                          
                          <img src="{{ asset('images/Filter oli.png') }}" alt="" class="d-block m-auto icon-size" />
                          <h4 class="text-center">Oli</h4>
                          
                      </div>
                  </div>
              </a>
          </div>
      </div>
      <br>
      <div class="row mr-0 ml-0">
          <div class="col-4 no-gutters mx-auto">
              <a href="info/index.html">
                  <div class="card card-kategori">
                      <div class="btn btn-kateogri">
                          
                          <img src="{{ asset('images/Filter oli.png') }}" alt="" class="d-block m-auto icon-size" />
                          <h4 class="text-center">Oli</h4>
                          
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-4 no-gutters mx-auto">
              <a href="https://em.ub.ac.id/apps/sambat/">
                  <div class="card card-kategori">
                      <div class="btn btn-kateogri">
                          
                          <img src="{{ asset('images/Filter oli.png') }}" alt="" class="d-block m-auto icon-size" />
                          <h4 class="text-center">Oli</h4>
                          
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-4 no-gutters mx-auto">
              <a href="https://em.ub.ac.id/apps/store/">
                  <div class="card card-kategori">
                      <div class="btn btn-kateogri">
                          
                          <img src="{{ asset('images/Filter oli.png') }}" alt="" class="d-block m-auto icon-size" />
                          <h4 class="text-center">Oli</h4>
                          
                      </div>
                  </div>
              </a>
          </div>
      </div> --}}

                    {{-- <!-- kategori produk -->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center" style="font-weight: 600; padding-top:3rem;">Kategori Produk</h2>
    </div>
    <!-- kategori pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/satu') }}">
          <img src="{{ asset('images/oli motor_1.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
            <p class="card-text">Kategori Pertama</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/dua') }}">
          <img src="{{ asset('images/oli motor_1.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/dua') }}" class="text-decoration-none">
            <p class="card-text">Kategori Kedua</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/tiga') }}">
          <img src="{{ asset('images/oli motor_1.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/tiga') }}" class="text-decoration-none">
            <p class="card-text">Kategori Ketiga</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori ke-4 -->
    <div class="col-md-4 pb-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/tiga') }}">
          <img src="{{ asset('images/oli motor_1.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/tiga') }}" class="text-decoration-none">
            <p class="card-text">Kategori Ketiga</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori ke-5 -->
    <div class="col-md-4 pb-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/tiga') }}">
          <img src="{{ asset('images/oli motor_1.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/tiga') }}" class="text-decoration-none">
            <p class="card-text">Kategori Ketiga</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori ke-6 -->
    <div class="col-md-4 pb-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/tiga') }}">
          <img src="{{ asset('images/oli motor_1.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/tiga') }}" class="text-decoration-none">
            <p class="card-text">Kategori Ketiga</p>
          </a>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- end kategori produk -->   
              {{-- <div class="row">
                <div class="col">
                  <div class="mx-auto">
                  <h1 style="font-weight: 600; padding-top:3rem;">Kategori Product</h1>
                  </div>
                </div>
              </div>
              <div class="row row-cols-1 row-cols-md-3">
          <div class="col mb-4 px-4">
            <div class="card">
              <img src="{{ asset('images/oli motor_1.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Oli Mobil</h5>
              </div>
            </div>
          </div>
          <div class="col mb-4 px-4">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Ban Mobil</h5>
                
              </div>
            </div>
          </div>
          <div class="col mb-4 px-4">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Shock Breaker</h5>
                
              </div>
            </div>
          </div>
          <div class="col mb-4 px-4">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Oli Motor</h5>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="col mb-4 px-4">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Ban Motor</h5>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="col mb-4 px-4">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Filter Oli</h5>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
        </div>                                          
      </div>       --}}
    </div>
    </section>

    <section class="row-layanan">
      <div class="container">
        <div class="layanan">
          <div class="col col-md-12 col-sm-12 mb-4">
            <h2 class="text-center" style="font-weight: 600; padding-top:3rem;">Layanan</h2>
          </div>
        </div>
                           <!-- kategori produk -->
  <div class="row mr-0 ml-0 mt-4">
    
    <!-- kategori pertama -->
    <div class="col-4 no-gutters mx-auto">
      <div class="card mb-4 shadow-sm card-layanan">
        <a href="{{ URL::to('kategori/satu') }}">
          <img src="{{ asset('images/layanan1.png') }}" alt="foto kategori" class="card-img-top img-layanan">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
            <p class="card-text">Kategori Pertama</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori kedua -->
    <div class="col-4 no-gutters mx-auto">
      <div class="card mb-4 shadow-sm card-layanan">
        <a href="{{ URL::to('kategori/dua') }}">
          <img src="{{ asset('images/layanan2.png') }}" alt="foto kategori" class="card-img-top img-layanan">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/dua') }}" class="text-decoration-none">
            <p class="card-text">Kategori Kedua</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori ketiga -->
    <div class="col-4 no-gutters mx-auto">
      <div class="card mb-4 shadow-sm card-layanan">
        <a href="{{ URL::to('kategori/tiga') }}">
          <img src="{{ asset('images/layanan3.png') }}" alt="foto kategori" class="card-img-top img-layanan">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/tiga') }}" class="text-decoration-none">
            <p class="card-text">Kategori Ketiga</p>
          </a>
        </div>
      </div>
    </div>

        {{-- <div class="row">
          <div class="col">
            <div class="mx-auto">
            <h1 style="font-weight: 600; padding-top:3rem;">Layanan</h1>
            </div>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 row3">
    <div class="col mb-4 px-4">
      <div class="card">
        <img src="{{ asset('images/layanan1.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">ORDER</h5> 
        </div>
      </div>
    </div>
    <div class="col mb-4 px-4">
      <div class="card">
        <img src="{{ asset('images/layanan2.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">TRACKING</h5> 
        </div>
      </div>
    </div>
    <div class="col mb-4 px-4">
      <div class="card">
        <img src="{{ asset('images/layanan3.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">TROLLEY</h5> 
        </div>
      </div>
    </div>
                                       
</div>       --}}
</div>
</section>
 
{{-- <div class="container">
      <div class="row">
        <div class="col">
          <div class="mx-auto">
          <h1>Layanan</h1>
          </div>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col">
          <div class="product-items">
          <div class="card rekom-card">
            <img 
                src="https://reparasimobil.com/wp-content/uploads/2020/11/c02f5b75d1-300x216.jpg" 
                class="card-img-top"
            />

            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
          </div>
          <div class="card rekom-card">
            <img 
                src="https://reparasimobil.com/wp-content/uploads/2020/11/c02f5b75d1-300x216.jpg" 
                class="card-img-top"
            />

            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
             </div>
           
          </div>
          <div class="card rekom-card">
            <img 
                src="https://reparasimobil.com/wp-content/uploads/2020/11/c02f5b75d1-300x216.jpg" 
                class="card-img-top"
            />

            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            
          </div>
          </div>
        </div>
      </div> 
</div> --}}


{{-- @include('components/footer') --}}

@endsection