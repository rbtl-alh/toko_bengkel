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
                <a class="nav-link main" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link main" href="{{ url('/product') }}">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link main" href="{{ url('/tracking') }}">Tracking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link main" href="{{ url('/trolley') }}">Trolley</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link main" href="{{ url('/history') }}">History</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link main" href="{{ url('/about') }}">About Us</a>
              </li>
            </ul>
            <ul class="navbar-nav dropdown-menu-lg-start dropstart">
              {{-- <li class="nav-item dropdown"> --}}
                {{-- <a class="nav-item" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; margin-right: 2rem">
                  <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
                </a> --}}
                <li class="nav-item dropdown">
                  {{-- <div class="dropdown"> --}}
                    
                      {{-- <img src="{{ asset('images/user.png') }}" alt="" width="45" style="margin-right: 2rem"> --}}

                      <li class="nav-item" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; margin-right: 2rem">
                        <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
                      </li>
                      
                      <li class="nav-link">{{ $itemuser->name }}</li>

                      {{-- <div>{{ $itemuser->name }}</div> --}}
                  
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      {{-- <li><a class="dropdown-item" href="#">Action</a></li> --}}
                      <li><a class="dropdown-item" href="{{ url('/history') }}">History Order</a></li>
                      <li><a class="dropdown-item" href="{{ url('/logout') }}">
                        @method('post')
                        @csrf
                        Log Out
                      </a></li>
                    </ul>
                  {{-- </div> --}}
                    {{-- <i class="fas fa-user-circle"></i>
                    <a class="nav-link" href="{{ url('/signin') }}">Sign In</a> --}}
                    
                </li> 
                {{-- <a class="nav-link" href="{{ url('/logout') }}">
                  @method('post')
                  @csrf
                  Log Out
                </a> --}}
              {{-- </li>    --}}
                {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-right: 5rem">
                  {{-- <a class="dropdown-item" style="margin-right: 5rem" href="#">Dashboard</a>
                  <a class="dropdown-item" href="#">Edit Profile</a> --
                </div> --}}
              {{-- </li> --}}
                {{-- <li class="nav-item">
                  <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="{{ asset('images/user.png') }}" alt="" width="45" style="margin-right: 2rem">
                    </a>
                  
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                    {{-- <i class="fas fa-user-circle"></i>
                    <a class="nav-link" href="{{ url('/signin') }}">Sign In</a> --
                    
                </li> --}}
            </ul>
        </div>
      </nav>
