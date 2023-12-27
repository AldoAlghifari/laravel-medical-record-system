@extends('layout')

@section('title','Data Pembayaran')

@section('content')

<h2 class="text-center my-3">DATA PEMBAYARAN</h2>

<div class="my-2 d-flex justify-content-between">
    <a href="pembayaran-add" class="btn btn-primary ">Tambah Data</a>
    <a href="pembayaran-deleted" class="btn btn-info ">Show Deleted Data</a>
</div>
<div class="my-3 col-12 col-sm-8 col-md-3">
    <form action="" method="get">
        <div class="input-group mb-3">
            <input type="text" placeholder="Cari Nama" name="keyword" class="form-control">
            <button class="bg-transparent border-0" type="submit"><i data-feather="search"></i></button>
            <button type="button" id="voiceSearchButton" class="bg-transparent border-0"><i data-feather="mic"></i></button>
        </div>
    </form>
</div>
@if(Session::has('status'))
<div class="alert alert-success" role="alert">
    {{ Session::get('message') }}
</div>
@endif
  <table class="table text-center table-striped ">
    <thead class="text-center table-bordered border-primary">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Pembayaran</th>
            <th>Metode Bayar</th>
            <th>Nomor Kartu</th>
            <th>Total Tagihan</th>
            <th>Jumlah Dibayar</th>
            <th>Sisa Tagihan</th>
            <th colspan="2">Opsi</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($pembayaranList as $item)
        <tr>
            <td>{{ $loop -> iteration }}</td>
            <td>{{ $item -> nama }}</td>
            <td>{{ $item -> tanggalPembayaran }}</td>
            <td>{{ $item -> metodeBayar }}</td>
            <td>{{ $item -> nomorKartu }}</td>
            <td>{{ $item -> totalTagihan }}</td>
            <td>{{ $item -> jumlahDibayar }}</td>
            <td>{{ $item -> sisaTagihan }}</td>
            
            <td><a href="pembayaran-edit/{{ $item -> id }}" class="btn btn-warning btn-sm">Ubah</a></td>  
            <td><form onsubmit="return confirm('Yakin mau hapus data ini?')" 
                action="pembayaran/ {{ $item -> id }}" class="d-inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit" name="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div>
    
    {{ $pembayaranList ->withQueryString()-> links() }}
</div>
@endsection