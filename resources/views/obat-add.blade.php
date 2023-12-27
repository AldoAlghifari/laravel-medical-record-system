@extends('layout')

@section('title','tambah obat')

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
    <h3>FORM OBAT</h3>

    @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    
            <form action="obat" method="POST">
               @csrf
                <div class="mb-3">
                   <label for="kodeObat">Kode Obat</label>
                   <input type="text" name="kodeObat" id="input-area" class="form-control">
               </div>
               <div class="mb-3">
                   <label for="nama">Nama Obat</label>
                   <input type="text" name="nama"  id="input-area" class="form-control">
               </div>
               <div class="mb-3">
                    <label for="jenisObat">Jenis Obat</label>
                    <input type="text" name="jenisObat"  id="input-area" class="form-control">
                </div>
               <div class="mb-3">
                   <label for="tanggalMasuk">Tanggal Masuk</label>
                   <input type="date" name="tanggalMasuk"  id="input-area" class="form-control">
               </div>
            
               <div class="mb-3">
                    <label for="pengirim">Pengirim</label>
                    <input type="text" name="pengirim"  id="input-area" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="penerima">Penerima</label>
                    <input type="text" name="penerima"  id="input-area" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="catatan">Catatan</label>
                    <input type="text" name="catatan"  id="input-area" class="form-control">
                </div>
                 <div class="mb-3">
                    <a href="/obat" class="btn btn-primary"><< Back</a>
                    <button class="btn btn-success" type="submit">Simpan</button>
                    <button class="btn btn-warning" type="reset">Reset</button>

                 </div>
                  
              </form>
        </div>

@endsection