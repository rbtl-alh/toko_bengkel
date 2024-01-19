<!DOCTYPE html>
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
                    <div class="card-body">
                        <h1 class="card-title pb-2">Sign Up</h1>
                        <h3 class="card-title">Create new account!</h3>
                        <form>
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
                                <div>Sudah punya akun? <a href="{{ url('/signin') }}">Log in disini</a></div>
                            </div>
                            {{-- <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div> --}}
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
</html>