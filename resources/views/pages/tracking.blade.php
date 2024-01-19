@extends('layouts.customer')


@section('tittle', 'Toko Bengkel')


@section('container')
<link rel="stylesheet" href="{{ asset('css/tracking.css') }}">

<div class="tracking-container">
      <div class="tracking-title">
        <h1>Tracking</h1>
      </div>
      <div class="tracking-contents">
        <form class="form-inline" type="get" action="{{url('/tracking/search')}}" method="GET">
          <input name="search" class="form-control col-6" type="search" placeholder="Kode Unik" aria-label="Search">
          <div class="">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </div>
        </form>
      </div>
</div>

@endsection