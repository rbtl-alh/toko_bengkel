
@extends('admin/navbarAdmin')

@section('tittle', 'Toko Bengkel')

@section('container')

<link rel="stylesheet" href="/css/trackingAdmin.css">
<section class="container-fluid">
<div class="row">
        <div class="header">
            <h1 class="text-center">Admin Tracking</h1>
        </div>
    </div> 

<div class="container">
  <table class="table table-hover">
    <thead class="thead-light">
      <tr>
        <th scope="col">Nomor</th>
        <th scope="col">Kode Unik</th>
        <th scope="col">Nama</th>
        <th scope="col">Tanggal Pemesanan</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>1234</td>
        <td>Otto</td>
        <td>29-01-21</td>
        <td>
          <a href="{{url('/admin/edit/tracking')}}"> Edit</a>
          <a href="#"> Delete</a> 
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>1234</td>
        <td>Otto</td>
        <td>29-01-21</td>
        <td>
          <a href="#"> Edit</a>
          <a href="#"> Delete</a> 
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>1234</td>
        <td>Otto</td>
        <td>29-01-21</td>
        <td>
          <a href="#"> Edit</a>
          <a href="#"> Delete</a> 
        </td>
      </tr>
      
    </tbody>
  </table>
</div>
</section>

@include('components.footer')

@endsection