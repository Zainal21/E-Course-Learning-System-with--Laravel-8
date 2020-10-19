<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Teman Belajar</title>
  <style>
    body{
      overflow-x: hidden
    }
    #hero-success{
      margin-top: 90px
    }
  </style>
</head>

<body>
  <!-- header -->
  <section id="hero-success">
    <div class="row">
      <div class="col d-flex justify-content-center">
        <img src="{{url('assets/images/success-buy.png')}}" alt="" width="294">
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <h2 class="text-muted text-center"><strong>Transaksi Berhasil!</strong></h2>
       <p class="text-muted text-center">Silakan tunggu informasi terbaru dari kami.</p>
      <a href="{{url('/')}}" class="btn text-white btn-success"><strong>kembali ke Beranda</strong></a>
      </div>
    </div>
  </section>


@include('layouts.footer')