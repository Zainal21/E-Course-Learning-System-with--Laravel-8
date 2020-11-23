<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">
  <title>Transaksi Sukses - Teman Belajar</title>
  <style>
    body{
      overflow-x: hidden
    }
    #hero-success{
      margin-top: 40px
    }
  </style>
</head>

<body>
  <section id="hero-success">
    <div class="row">
      <div class="col d-flex justify-content-center">
        <img src="{{url('assets/images/ic_mail.png')}}" alt="" width="294">
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <h2 class="text-muted text-center text-bold" style="font-weight: bold">Transaksi Berhasil!</h2>
       <p class="text-muted text-center">Silakan Tunggu Notifikasi Email Dari Kami.</p>
      <a href="{{url('/')}}" class="btn text-white btn-primary custom-btn mt-5"><strong>kembali ke Beranda</strong></a>
      </div>
    </div>
  </section>

  <footer class="site-footer">
    <div class="container">
      <div class="row text-muted text-center">
        <div class="col-md-12">
          <div class="border-top pt-5">
            <p class="text-grey">
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved <i class="icon-heart text-danger" aria-hidden="true"></i> by <a
                href="#" target="_blank">Muhamad Zainal Arifin</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
  
    @include('components.script')
  </body>
  </html>