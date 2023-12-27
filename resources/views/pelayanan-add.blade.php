@extends('layout')

@section ('title','Pelayanan')

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
    <h3>FORM PELAYANAN</h3>

    @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
   
            <form action="pelayanan" method="POST">
               @csrf
                <div class="mb-3">
                   <label for="nik">NIK</label>
                   <select name="nik" id="nik" class="form-control">
                    <option value="">Pilih</option>
                    @foreach ($pasien as $item)
                        <option value="{{ $item -> nik }}">{{ $item -> nik }} | {{ $item -> nama }}</option>
                    @endforeach
                   </select>
               </div>
               <div class="mb-3">
                   <label for="nama">Nama</label>
                   <select name="nama" id="nama" class="form-control">
                    <option value="">Pilih</option>
                    @foreach ($pasien as $item)
                        <option value="{{ $item -> nama }}">{{ $item -> nik }} | {{ $item -> nama }}</option>
                    @endforeach
                   </select>
               </div>
               <div class="mb-3">
                   <label for="tanggalPelayanan">Tanggal Pelayanan</label>
                   <input type="date" name="tanggalPelayanan"  id="tanggalPelayanan" class="form-control"> 
               </div>
               <div class="mb-3">
                   <label for="jenisPelayanan">Jenis Pelayanan</label>
                   <input type="text" name="jenisPelayanan"  id="jenisPelayanan" class="form-control">
               </div>
               
               <div class="mb-3">
                    <label for="jenisPasien">Jenis Pasien</label>
                    <input type="text" name="jenisPasien"  id="jenisPasien" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="diagnosa">Diagnosa</label>
                    <input type="text" name="diagnosa"  id="diagnosa" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="tb">Tinggi Badan</label>
                    <input type="text" name="tb"  id="tb" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="bb">Berat Badan</label>
                    <input type="text" name="bb"  id="bb" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="catatanFisik">Catatan Fisik</label>
                    <input type="text" name="catatanFisik"  id="catatanFisik" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="catatanDokter">Catatan Dokter</label>
                    <input type="text" name="catatanDokter"  id="catatanDokter" class="form-control">
                </div>
                 <div class="mb-3">
                    <a href="/pelayanan" class="btn btn-primary"><< Back</a>
                    <button class="btn btn-success" type="submit">Simpan</button>
                    <button class="btn btn-warning" type="reset">Reset</button>
                 </div>
                  
              </form>
        </div>

@endsection