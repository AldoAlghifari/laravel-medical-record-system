@extends('layout')

@section('title','tambah pasien')

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
    <h3>PENDAFTARAN PASIEN</h3>

    @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    
            <form action="pasien" method="POST" >
               @csrf
                <div class="mb-3">
                   <label for="nik">NIK</label>
                   <input type="number" name="nik" id="input-area" class="form-control">
               </div>
               <div class="mb-3">
                   <label for="nama">Nama</label>
                   <input type="text" name="nama"  id="input-area" class="form-control">
               </div>
               <div class="mb-3">
                   <label for="tanggalLahir">Tanggal Lahir</label>
                   <input type="date" name="tanggalLahir"  id="input-area" class="form-control">
               </div>
               <div class="mb-3">
                   <label for="umur">Umur</label>
                   <input type="text" name="umur"  id="input-area" class="form-control">
               </div>
               <div class="mb-3">
                   <label for="jenisKelamin">Jenis Kelamin</label>
                   <select name="jenisKelamin"  id="input-area" class="form-control">
                    <option value="">Pilih</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                   </select> 
               </div>
               <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat"  id="input-area" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="noKk">No KK</label>
                    <input type="number" name="noKk"  id="input-area" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="namaOrtu">Nama Ortu</label>
                    <input type="text" name="namaOrtu"  id="input-area" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="golDarah">Gol Darah</label>
                    <input type="text" name="golDarah"  id="input-area" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="noHp">No Hp</label>
                    <input type="text" name="noHp"  id="input-area" class="form-control">
                </div>
                 <div class="mb-3">
                    <a href="/pasien" class="btn btn-primary"><< Back</a>
                    <button class="btn btn-success" type="submit">Simpan</button>
                    <button class="btn btn-warning" type="reset">Reset</button>
                 </div>
                  
              </form>
        </div>

@endsection