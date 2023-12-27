@extends('layout')

@section ('title','Pembayaran Ubah')

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
    <h3>UBAH PEMBAYARAN</h3>

    @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
   
            <form action="/pembayaran/{{ $pembayaran->id }}" method="POST">
               @csrf
               @method('PUT')
               <div class="mb-3">
                   <label for="nama">Nama</label>
                   <select name="nama" id="nama" class="form-control">
                    <option value="{{ $pembayaran -> nama }}">{{ $pembayaran -> nama }}</option>
                    
                   </select>
               </div>
               <div class="mb-3">
                   <label for="tanggalPembayaran">Tanggal Pembayaran</label>
                   <input type="date" class="form-control" name="tanggalPembayaran"  id="tanggalPembayaran" value="{{ $pembayaran -> tanggalPembayaran }}">
               </div>
               <div class="mb-3">
                   <label for="metodeBayar">Metode Bayar</label>
                   <select name="metodeBayar" class="form-control" id="metodeBayar" value="{{ $pembayaran -> metodeBayar }}">
                    <option value="{{ $pembayaran -> metodeBayar }}">{{ $pembayaran -> metodeBayar }}</option>
                    <option value="Cash">Cash</option>
                    <option value="Debit">Kartu Debit</option>
                    <option value="eMoney">eMoney</option>
                   </select>
               </div>
               <div class="mb-3">
                    <label for="nomorKartu">Nomor Kartu </label>
                    <input type="number" name="nomorKartu" class="form-control" id="nomorKartu" value="{{ $pembayaran -> nomorKartu }}">
                </div>
                <div class="mb-3">
                    <label for="totalTagihan">Total Tagihan</label>
                    <input type="text" name="totalTagihan" class="form-control" id="totalTagihan" value="{{ $pembayaran -> totalTagihan }}">
                </div>
                <div class="mb-3">
                    <label for="jumlahDibayar">Jumlah Dibayar</label>
                    <input type="text" name="jumlahDibayar" class="form-control" id="jumlahDibayar" value="{{ $pembayaran -> jumlahDibayar }}">
                </div>
                <div class="mb-3">
                    <label for="sisaTagihan">Sisa Tagihan</label>
                    <input type="text" name="sisaTagihan" class="form-control" id="sisaTagihan" value="{{ $pembayaran -> sisaTagihan }}">
                </div>
                
                 <div class="mb-3">
                    <a href="/pembayaran" class="btn btn-primary"><< Back</a>
                    <button class="btn btn-success" type="submit">Simpan</button>
                 </div>
                  
              </form>
        </div>

@endsection