@extends('layout')

@section('title','Data Pelayanan')

@section('content')

<h2 class="text-center my-3">DATA PELAYANAN</h2>

<div class="my-2 d-flex justify-content-between">
    <a href="pelayanan-add" class="btn btn-primary ">Tambah Data</a>
    <a href="pasien-deleted" class="btn btn-info ">Show Deleted Data</a>
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
            <th>NIK</th>
            <th>Nama</th>
            <th>Tanggal Pelayanan</th>
            <th>Jenis Pelayanan</th>
            <th>Jenis Pasien</th>
            <th>Diagnosa</th>
            <th>BB</th>
            <th>TB</th>
            <th>Catatan Fisik</th>
            <th>Catatan Dokter</th>
            <th colspan="2">Opsi</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($pelayananList as $item)
        <tr>
            <td>{{ $loop -> iteration }}</td>
            <td>{{ $item -> nik }}</td>
            <td>{{ $item -> nama }}</td>
            <td>{{ $item -> tanggalPelayanan }}</td>
            <td>{{ $item -> jenisPelayanan }}</td>
            <td>{{ $item -> jenisPasien }}</td>
            <td>{{ $item -> diagnosa }}</td>
            <td>{{ $item -> bb }}</td>
            <td>{{ $item -> tb }}</td>
            <td>{{ $item -> catatanFisik }}</td>
            <td>{{ $item -> catatanDokter }}</td>
            
            <td><a href="pelayanan-edit/{{ $item -> id }}" class="btn btn-warning btn-sm">Ubah</a></td>  
            <td><form onsubmit="return confirm('Yakin mau hapus data ini?')" 
                action="pelayanan/ {{ $item -> id }}" class="d-inline" method="POST">
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
    
    {{ $pelayananList ->withQueryString()-> links() }}
</div>
@endsection