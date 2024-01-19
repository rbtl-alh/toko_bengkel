<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-sm-8">
                <div class="card">
                    <h1 class="text-center pt-4" style="font-size: 3rem; font-weight: 700; color: white">Sign Up</h1>
                    
                    {{-- <div class="card-header">{{ __('Register') }}</div> --}}
                    <div class="card-body">
                        <x-guest-layout>
                            {{-- <x-auth-card> --}}
                                {{-- <x-slot name="logo">
                                    <a href="/">
                                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                                    </a>
                                </x-slot> --}}
                        
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                        
                                    <!-- Name -->
                                    <div class="form-group pb-3">
                                        <x-label for="name" :value="__('Name')" style="color: white" />
                        
                                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                    </div>
                        
                                    <!-- Email Address -->
                                    <div class="form-group mt-4">
                                        <x-label for="email" :value="__('Email')" style="color: white" />
                        
                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                    </div>
                                    <div class="form-group mt-4">
                                        <x-label for="email" :value="__('Username')" style="color: white" />
                        
                                        <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />
                                    </div>
                        
                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-label for="password" :value="__('Password')" style="color: white" />
                        
                                        <x-input id="password" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="new-password" />
                                    </div>
                        
                                    <!-- Confirm Password -->
                                    <div class="mt-4">
                                        <x-label for="password_confirmation" :value="__('Confirm Password')" style="color: white"/>
                        
                                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password_confirmation" required />
                                    </div>
                        
                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
                        
                                        <x-button class="ml-4">
                                            {{ __('Register') }}
                                        </x-button>
                                    </div>
                                </form>
                            {{-- </x-auth-card> --}}
                        </x-guest-layout>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
                    <div class="card-body">
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
                        <h1 class="card-title pb-2">Sign Up</h1>
                        <h3 class="card-title">Create new account!</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group pb-3">
                              <label for="exampleInputEmail1">Nama Lengkap</label>
                              <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group pb-3">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group pb-3">
                              <label for="exampleInputEmail1">Username</label>
                              <input type="text" class="form-control" id="username" placeholder="Masukkan Username">
                            </div>
                            <div class="form-group pb-1">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="signin pb-3">
                                <div>Sudah punya akun? <a href="{{ url('/login') }}">Log in disini</a></div>
                            </div>
                            {{-- <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div> --
                            <div class="col-md-12 text-center py-3">
                                <button type="submit" class="btn btn-light px-4">Submit</button>
                            </div>
                        </form>
                    </div>
                  </div>
            
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>

</body>
</html> --}}