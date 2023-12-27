@extends('layout')

@section('title','ubah pegawai')

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
    <h3>UBAH PEGAWAI</h3>

    @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    
            <form action="/pegawai/{{ $pegawai -> id }}" method="POST">
               @csrf
               @method('PUT')
                <div class="mb-3">
                   <label for="nip">NIP</label>
                   <input type="number" name="nip" id="input-area" class="form-control" value="{{ $pegawai -> nip }}">
               </div>
               <div class="mb-3">
                   <label for="nama">Nama</label>
                   <input type="text" name="nama"  id="input-area" class="form-control" value="{{ $pegawai -> nama }}">
               </div>
               <div class="mb-3">
                   <label for="tanggalLahir">Tanggal Lahir</label>
                   <input type="date" name="tanggalLahir"  id="input-area" class="form-control" value="{{ $pegawai -> tanggalLahir }}">
               </div>
               <div class="mb-3">
                   <label for="jenisKelamin">Jenis Kelamin</label>
                   <select name="jenisKelamin"  id="input-area" class="form-control">
                    <option value="{{ $pegawai -> jenisKelamin }}">{{ $pegawai -> jenisKelamin }}</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                   </select> 
               </div>
               <div class="mb-3">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan"  id="input-area" class="form-control" value="{{ $pegawai -> jabatan }}">
                </div>
               <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat"  id="input-area" class="form-control" value="{{ $pegawai -> alamat }}">
                </div>
                <div class="mb-3">
                    <label for="noHp">No Hp</label>
                    <input type="text" name="noHp"  id="input-area" class="form-control" value="{{ $pegawai -> noHp }}">
                </div>
                 <div class="mb-3">
                    <a href="/pegawai" class="btn btn-primary"><< Back</a>
                    <button class="btn btn-success" type="submit">Simpan</button>
                 </div>
                  
              </form>
        </div>

@endsection