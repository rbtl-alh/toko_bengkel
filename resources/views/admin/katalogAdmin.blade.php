
@extends('admin/navbarAdmin')

@section('tittle', 'Toko Bengkel')

@section('container')
<link rel="stylesheet" href="/css/katalogAdmin.css">

<section class="py-5 container-fluid">
    <div class="row">
        <div class="header">
            <h1 class="text-center">Edit Katalog</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 p-4">
            <div class="card">
                <img src="{{ asset('images/banMobil_1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{url('/admin/edit')}}" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-primary">Delete</a>
                </div>
            </div>    
        </div>    
        <div class="col-md-4 p-4">
            <div class="card">
                <img src="{{ asset('images/oli motor_1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{url('/admin/edit')}}" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-primary">Delete</a>                
              </div>
            </div>    
        </div>    
        <div class="col-md-4 p-4">
            <div class="card">
                <img src="{{ asset('images/banMobil_1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{url('/admin/edit')}}" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-primary">Delete</a>                
              </div>
            </div>    
        </div>         
        <div class="col-md-4 p-4">
            <div class="card">
                <img src="{{ asset('images/oli motor_1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{url('/admin/edit')}}" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-primary">Delete</a>                
              </div>
            </div>    
        </div>
        <div class="col-md-4 p-4">
            <div class="card">
                <img src="{{ asset('images/banMobil_1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{url('/admin/edit')}}" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-primary">Delete</a>
                </div>
            </div>    
        </div>
        <div class="col-md-4 p-4">
            <div class="card">
                <img src="{{ asset('images/oli motor_1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{url('/admin/edit')}}" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-primary">Delete</a>                
              </div>
            </div>    
        </div>                 
    </div>  
</div>
</section>

    @include('components.footer')

@endsection