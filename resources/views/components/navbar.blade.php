    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> --}}
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/LogoTokoBengkel.png') }}" class="logo">
        </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/product') }}">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/tracking') }}">Tracking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/trolley') }}">Trolley</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="{{ url('/history') }}">History</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">About Us</a>
              </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Sign In</a>
                </li>
            </ul>
        </div>
      </nav>