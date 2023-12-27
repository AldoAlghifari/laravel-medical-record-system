@extends('layout')

@section('title','ubah pasien')

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
    <h3>UBAH PASIEN</h3>

    @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    
            <form action="/pasien/{{ $pasien -> id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                   <label for="nik">NIK</label>
                   <input type="number" name="nik" id="input-area" value="{{ $pasien -> nik }}" class="form-control">
               </div>
               <div class="mb-3">
                   <label for="nama">Nama</label>
                   <input type="text" name="nama" id="input-area" value="{{ $pasien -> nama }}" class="form-control">
               </div>
               <div class="mb-3">
                   <label for="tanggalLahir">Tanggal Lahir</label>
                   <input type="date" name="tanggalLahir" id="input-area" value="{{ $pasien -> tanggalLahir }}" class="form-control">
               </div>
               <div class="mb-3">
                   <label for="umur">Umur</label>
                   <input type="text" name="umur" id="input-area" value="{{ $pasien -> umur }}" class="form-control">
               </div>
               <div class="mb-3">
                   <label for="jenisKelamin">Jenis Kelamin</label>
                   <select name="jenisKelamin" id="input-area" class="form-control">
                    <option value="{{ $pasien -> jenisKelamin }}">{{ $pasien -> jenisKelamin }}</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                   </select> 
               </div>
               <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="input-area" value="{{ $pasien -> alamat }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="noKk">No KK</label>
                    <input type="number" name="noKk" id="input-area" value="{{ $pasien -> noKk }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="namaOrtu">Nama Ortu</label>
                    <input type="text" name="namaOrtu" id="input-area" value="{{ $pasien -> namaOrtu }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="golDarah">Gol Darah</label>
                    <input type="text" name="golDarah" id="input-area" value="{{ $pasien -> golDarah }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="noHp">No Hp</label>
                    <input type="text" name="noHp" id="input-area" value="{{ $pasien -> noHp }}" class="form-control">
                </div>
                 <div class="mb-3">
                    <a href="/pasien" class="btn btn-primary"><< Back</a>
                    <button class="btn btn-success" type="submit">Ubah</button>
                 </div>
                  
              </form>
        </div>

@endsection