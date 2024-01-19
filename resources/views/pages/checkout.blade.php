@extends('layouts.customer')
@section('container')
<div class="container" style="padding-top: 5rem">
  @foreach ($itemdetail as $item)
  <div class="row justify-content-sm-center pb-4">
      <div class="col-sm-8">
          <div class="card px-4">
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
                  {{-- <h1 class="card-title pb-2">ORDER</h1> --}}
                  {{-- <h3 class="card-title">Create new account!</h3> --}}                
                  <div class="card">
                    <div class="">
                      <p>Kode Unik: {{ $item->kode_unik }}</p>
                      <p>Nama: {{ $item->nama }}</p>
                      <p>Nomor HP: {{ $item->no_hp }}</p>
                      <p>Jenis Kendaraan: {{ $item->jenis_kendaraan }}</p>
                      <p>Nomor Plat: {{ $item->plat_nomor }}</p>
                      <p>Keluhan: {{ $item->keluhan }}</p>
                      <p>Keterangan: {{ $item->ket }}</p>
                    </div>
                  </div>
                 
                      
                      {{-- <div class="form-group pb-3">
                        <label for="noHP">No Handphone</label>
                        <input type="text" class="form-control" id="nomor" name="no_hp" placeholder="Masukkan No Handphone" value="{{ old('noHP') }}">
                      </div>
                      <div class="form-group pb-3">
                        <label for="jenis_kendaraan">Jenis Kendaraan</label>
                        <input type="text" class="form-control" id="kendaraan" name="jenis_kendaraan" placeholder="Masukkan Jenis Kendaraan" value="{{ old('jenis_kendaraan') }}">
                      </div>
                      <div class="form-group pb-3">
                          <label for="plat_nomor">Nomor Plat</label>
                          <input type="text" class="form-control" id="plat" name="plat_nomor" placeholder="Masukkan Nomor Plat" value="{{ old('plat_nomor') }}">
                      </div>
                      <div class="form-group pb-3">
                        <label for="ket">Keterangan Order</label>
                        <input type="text" class="form-control" id="ket" name="ket" placeholder="Masukkan Keterangan Order" value="{{ old('ket') }}">
                      </div>
                      <div class="form-group pb-3">
                        <label for="keluhan">Keluhan</label>
                        <input type="text" class="form-control" id="keluhan" name="keluhan" placeholder="Masukkan Keluhan" value="{{ old('keluhan') }}">
                      </div> --}}
                      {{-- <div class="mb-3">
                          <label for="formFileMultiple" class="form-label">Upload Foto STNK</label>
                          <input class="form-control" type="file" id="formFileMultiple" multiple>
                      </div> --}}
                      {{-- <div class="form-group pb-3">
                        <label for="foto">Upload Foto STNK</label>
                        <input type="file" name="datafile" id="foto" size="40">
                      </div> --}}
                      
                      {{-- <div class="col-md-12 text-center py-3">
                          <button type="submit" class="btn btn-light px-4">Order</button>
                      </div> --}}
                  </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach
</div>
@endsection