@extends('layout')

@section('title','Data PEGAWAI')

@section('content')

<h2 class="text-center my-3">DATA PEGAWAI</h2>


 
<div class="my-2 d-flex justify-content-between">
    <a href="pegawai-add" class="btn btn-primary ">+ Tambah Pegawai</a>
    <a href="pegawai-deleted" class="btn btn-info ">Show Deleted Data</a>
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
  <table class="table text-center text-center table-striped">
    <thead class="table-bordered border-primary">
        <tr>
            <th>NO</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th colspan="2">Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pegawaiList as $item)
        <tr>
            <td>{{ $loop -> iteration}}</td>
            <td>{{ $item -> nip }}</td>
            <td>{{ $item -> nama }}</td>
            <td>{{ $item -> tanggalLahir }}</td>
            <td>{{ $item -> jenisKelamin }}</td>
            <td>{{ $item -> jabatan }}</td>
            <td>{{ $item -> alamat }}</td>
            <td>{{ $item -> noHp }}</td>
            <td><a href="pegawai-edit/{{ $item -> id }}" class="btn btn-warning btn-sm">Ubah</a></td>   
            <td><form action="pegawai/{{ $item -> id }}" onsubmit="return confirm('Yakin mau hapus data ini?')" class="d-inline" method="POST">
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
   
    {{ $pegawaiList ->withQueryString()-> links() }}
</div>
@endsection