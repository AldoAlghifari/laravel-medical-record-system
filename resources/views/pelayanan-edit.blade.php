@extends('layout')

@section ('title','Ubah Data ')

@section('content')
    
<div class="mt-3 m-auto col-6">
    @if ($errors -> any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors -> all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h3>FORM EDIT PELAYANAN</h3>

    @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
   
            <form action="/pelayanan/{{ $pelayanan->id }}" method="POST">
                @csrf
               @method('PUT')
                <div class="mb-3">
                   <label for="nik">NIK</label>
                   <select name="nik" id="nik" class="form-control">
                    <option value="{{ $pelayanan -> nik }}">{{ $pelayanan -> nik }}</option>
                    
                   </select>
               </div>
               <div class="mb-3">
                   <label for="nama">Nama</label>
                   <select name="nama" id="nama" class="form-control">
                    <option value="{{ $pelayanan -> nama }}">{{ $pelayanan -> nama }}</option>
                    
                   </select>
               </div>
               <div class="mb-3">
                   <label for="tanggalPelayanan">Tanggal Pelayanan</label>
                   <input type="date" class="form-control" name="tanggalPelayanan"  id="tanggalPelayanan" value="{{ $pelayanan -> tanggalPelayanan }}">
               </div>
               <div class="mb-3">
                   <label for="jenisPelayanan">Jenis Pelayanan</label>
                   <input type="text" class="form-control" name="jenisPelayanan"  id="jenisPelayanan" value="{{ $pelayanan -> jenisPelayanan }}">
                </div>
               
               <div class="mb-3">
                    <label for="jenisPasien">Jenis Pasien</label>
                    <input type="text" class="form-control" name="jenisPasien"  id="jenisPasien" value="{{ $pelayanan -> jenisPasien }}">
                </div>
                
                <div class="mb-3">
                    <label for="diagnosa">Diagnosa</label>
                    <input type="text" class="form-control" name="diagnosa"  id="diagnosa" value="{{ $pelayanan -> diagnosa }}">
                </div>
               
                <div class="mb-3">
                    <label for="tb">Tinggi Badan</label>
                    <input type="text" class="form-control" name="tb"  id="tb" value="{{ $pelayanan -> tb }}">
                </div>
              
                <div class="mb-3">
                    <label for="bb">Berat Badan</label>
                    <input type="text" class="form-control" name="bb"  id="bb" value="{{ $pelayanan -> bb }}">
                </div>
               
                <div class="mb-3">
                    <label for="catatanFisik">Catatan Fisik</label>
                    <input type="text" class="form-control" name="catatanFisik"  id="catatanFisik" value="{{ $pelayanan -> catatanFisik }}">
                </div>
               
                <div class="mb-3">
                    <label for="catatanDokter">Catatan Dokter</label>
                    <input type="text" class="form-control" name="catatanDokter"  id="catatanDokter" value="{{ $pelayanan -> catatanDokter }}">
                </div>
                
                 <div class="mb-3">
                    <a href="/pelayanan" class="btn btn-primary"><< Back</a>
                    <button class="btn btn-success" type="submit">Simpan</button>
                 </div>
                  
              </form>
        </div>

@endsection