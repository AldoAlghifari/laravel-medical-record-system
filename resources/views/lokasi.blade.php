@extends('layout')

@section('title','lokasi')

@section('content')
<link rel="stylesheet" href="css/style.css" />
<div class="container">
    <div class="row justify-content-center align-center mt-6">
        <div class="col-md-8 col-10 text-center">
          <h2>LOKASI</h2>
  
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7932.230409798244!2d107.35483196254854!3d-6.248546829109723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6979a3029b9a9f%3A0xc23f83e1e4b7b23f!2sPuskesmas%20Rawamerta!5e0!3m2!1sen!2sid!4v1702432066078!5m2!1sen!2sid"
            width="750"
            height="300"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
          <br />
          <a
            href="https://maps.app.goo.gl/zTcrkSDbpQ9yXFVd8"
            target="_blank"
            class="btn btn-primary btn-md my-3 text"
            >Lihat Peta</a
          >
        </div>
    </div>

</div>
@endsection