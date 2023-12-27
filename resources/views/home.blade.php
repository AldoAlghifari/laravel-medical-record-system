@extends('layout')

@section ('title','Beranda')

@section ('content')
<link rel="stylesheet" href="css/style.css" />
<div class="jalan">
    <marquee
      direction="left"
      onmouseover="this.stop()"
      onmouseout="this.start()"
      ><b
        >SELAMAT DATANG di WEBSITE SISTEM REKAM MEDIS PUSKESMAS RAWAMERTA</b
      ></marquee
    >
  </div>

  <div class="container d-flex"  style="margin-bottom: 40px; margin-top: 90px">
    <img src="img/foto.png" alt="foto" width="240" height="240" class="d-inline-block rounded-bottom " style="margin-right: 20px;"/>
    <div class="content">
      <h2>APA ITU SISTEM REKAM MEDIS ?</h2>
      <p>
        Rekam Medis adalah berkas yang berisikan catatan dan dokumen tentang
        identitas pasien, pemeriksaan, pengobatan, tindakan, dan pelayanan
        lain yang telah diberikan kepada pasien (PERMENKES
        No:269/MENKES/III/2008 Tentang Rekam Medis). <br /><br />
        Rekam medis elektronik digunakan dalam peningkatan layanan kesehatan
        di Indonesia. Hal ini dilakukan untuk mencatat perjalanan perawatan
        pasien. Bila awalnya rekam medis menggunakan cara konvensional, kini
        banyak rumah sakit yang menerapkan sistem rekam medis elektronik.
        Dengan memanfaatkan perangkat lunak, rekam medis elektronik
        memungkinkan dokter melihat dan memonitor pasien secara menyeluruh
        dari waktu ke waktu.
      </p>
    </div>
  </div>

  <script>
    feather.replace();
  </script>

@endsection