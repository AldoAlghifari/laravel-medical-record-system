@extends('layout')

@section('title','Ubah Obat')

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
    <h3>UBAH OBAT</h3>

    @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    
            <form action="/obat/{{ $obat -> id }}" method="POST">
            @csrf
            @method('PUT')
                <div class="mb-3">
                   <label for="kodeObat">Kode Obat</label>
                   <input type="number" name="kodeObat" id="input-area" value="{{ $obat -> kodeObat }}" class="form-control">
               </div>
               <div class="mb-3">
                   <label for="nama">Nama Obat</label>
                   <input type="text" name="nama" id="input-area" value="{{ $obat -> nama }}" class="form-control">
               </div>
               <div class="mb-3">
                   <label for="tanggalMasuk">Tanggal Masuk</label>
                   <input type="date" name="tanggalMasuk" id="input-area" value="{{ $obat -> tanggalMasuk }}" class="form-control">
               </div>
               <div class="mb-3">
                   <label for="jenisObat">Jenis Obat</label>
                   <input type="text" name="jenisObat" id="input-area" value="{{ $obat -> jenisObat }}" class="form-control">
               </div>
               <div class="mb-3">
                    <label for="pengirim">Pengirim</label>
                    <input type="text" name="pengirim" id="input-area" value="{{ $obat -> pengirim }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="penerima">Penerima</label>
                    <input type="text" name="penerima" id="input-area" value="{{ $obat -> penerima }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="catatan">Catatan</label>
                    <input type="text" name="catatan" id="input-area" value="{{ $obat -> catatan }}" class="form-control">
                </div>
                 <div class="mb-3">
                    <a href="/obat" class="btn btn-primary"><< Back</a>
                    <button class="btn btn-success" type="submit">Ubah</button>
                 </div>
                  
              </form>
        </div>

@endsection