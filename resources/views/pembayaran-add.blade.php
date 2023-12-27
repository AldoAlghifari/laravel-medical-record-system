@extends('layout')

@section ('title','Pembayaran')

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
    <h3>FORM PEMBAYARAN</h3>

    @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
   
            <form action="pembayaran" method="POST">
               @csrf
                
               <div class="mb-3">
                   <label for="nama">Nama</label>
                   <select name="nama" id="nama" class="form-control">
                    <option value="">Pilih</option>
                    @foreach ($pelayanan as $item)
                        <option value="{{ $item -> nama }}"> {{ $item -> nama }}</option>
                    @endforeach
                   </select>
               </div>
               <div class="mb-3">
                   <label for="tanggalPembayaran">Tanggal Pembayaran</label>
                   <input type="date" name="tanggalPembayaran"  id="tanggalPembayaran" class="form-control">
               </div>
               <div class="mb-3">
                   <label for="metodeBayar">Metode Bayar</label>
                   <select name="metodeBayar" id="metodeBayar" class="form-control">
                    <option value="">Pilih</option>
                    <option value="Cash">Cash</option>
                    <option value="Debit">Kartu Debit</option>
                    <option value="eMoney">eMoney</option>
                   </select>
               </div>
               <div class="mb-3">
                    <label for="nomorKartu">Nomor Kartu </label>
                    <input type="number" name="nomorKartu"  id="nomorKartu" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="totalTagihan">Total Tagihan</label>
                    <input type="text" name="totalTagihan"  id="totalTagihan" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="jumlahDibayar">Jumlah Dibayar</label>
                    <input type="text" name="jumlahDibayar"  id="jumlahDibayar" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="sisaTagihan">Sisa Tagihan</label>
                    <input type="text" name="sisaTagihan"  id="sisaTagihan" class="form-control">
                </div>
                
                 <div class="mb-3">
                    <a href="/pembayaran" class="btn btn-primary"><< Back</a>
                    <button class="btn btn-success" type="submit">Simpan</button>
                    <button class="btn btn-warning" type="reset">Reset</button>
                 </div>
                  
              </form>
        </div>

@endsection