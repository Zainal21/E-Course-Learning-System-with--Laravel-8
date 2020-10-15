@include('layouts.header')
<div class="container">
  <div class="row align-items-center justify-content-center">
    <div class="col-lg-10 text-center">
      <h1>Belajar <strong>NeXT JS</strong></h1>
      <p>
        <span class="mr-2 mb-2">1 jam 24 m</span>
        <span class="mr-2 mb-2">Pemula</span>
        <span class="mr-2 mb-2">18 September 2020</span>
      </p>
    </div>
  </div>
</div>
</div>




<div class="site-section">
<div class="container">
  <div class="row mb-5">
    <div class="col-md">
      <div class="box-side mb-3">
        <iframe src="https://www.youtube.com/embed/vVPlE8__ENg?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1&amp;autoplay=1" allowfullscreen="" allowtransparency="" width="560" height="349"  allow="autoplay" aria-controls="" width="560%"></iframe>
      <h3><a href="#">{{$materi->kelas->nama_kelas}}</a></h3>
         <p class="mb-0 text-muted">
         <span class="mr-2 mb-2">{{$materi->kelas->level}}</span>
           <span class="mr-2 mb-2">{{$materi->kelas->created_at}}</span>
         </p>
       </div>
        <!-- Copy & Pasted from YouTube -->
    </div>
  </div>


  <div class="row">
    <div class="col-md-8">
      <ul class="list-unstyled tutorial-section-list">
      
        <li>
        <h3><a href="#">etst</a></h3>
        <a href="{{url('materi-kelas')}}" class="play">Play</a>
        </li>
      </ul>
    
    </div>
    <div class="col-md-4">
      <div class="box-side mb-3">
      <a href="#"><img src="{{asset('assets/images/image.png')}}" alt="Image" class="img-fluid"></a>
        <h3><a href="#">Belajar NuxJS</a></h3>
        <p class="mb-0 text-muted">
          <span class="mr-2 mb-2">1hr 24m</span>
          <span class="mr-2 mb-2">Advanced</span>
          <span class="mr-2 mb-2">Jun 19, 2020</span>
          <span class="mr-2 mb-2"><div class="badge badge-success">Telah Bergabung</div><div class="badge badge-danger mx-2">Belum Bergabung</div></span>
        </p>
        <a href="{{url('/transaksi-kelas')}}" class="btn btn-primary">Ikuti kelas</a>
        <a href="{{url('/login')}}" class="btn btn-primary">Login</a>
        <a href="" class="btn btn-primary">Lanjut Belajar</a>
      </div>
    </div>
  </div>
</div>
</div>



<div class="site-section bg-light">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-7 text-center mb-5">
      <div class="heading">
        <span class="caption">Testimoni</span>
        <h2>Apa Kata Mereka</h2>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 mb-4 mb-lg-0">
      <div class="testimonial-2">
        <h3 class="h5">Mudah Dipelajari</h3>
        <div>
          <span class="icon-star text-warning"></span>
          <span class="icon-star text-warning"></span>
          <span class="icon-star text-warning"></span>
          <span class="icon-star text-warning"></span>
          <span class="icon-star-o text-warning"></span>
        </div>
        <blockquote class="mb-4">
          <p>Mudah Dipelajari</p>
        </blockquote>
        <div class="d-flex v-card align-items-center">
          <img src="images/image.png" alt="Image" class="img-fluid mr-3">
          <div class="author-name">
            <span class="d-block">Zainal</span>
            <span>Student</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4 mb-lg-0">
      <div class="testimonial-2">
        <h3 class="h5">Mudah Dipelajari</h3>
        <div>
          <span class="icon-star text-warning"></span>
          <span class="icon-star text-warning"></span>
          <span class="icon-star text-warning"></span>
          <span class="icon-star text-warning"></span>
          <span class="icon-star-o text-warning"></span>
        </div>
        <blockquote class="mb-4">
          <p>Mudah Dipelajari</p>
        </blockquote>
        <div class="d-flex v-card align-items-center">
          <img src="images/image.png" alt="Image" class="img-fluid mr-3">
          <div class="author-name">
            <span class="d-block">Zainal</span>
            <span>Student</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4 mb-lg-0">
      <div class="testimonial-2">
        <h3 class="h5">Mudah Dipelajari</h3>
        <div>
          <span class="icon-star text-warning"></span>
          <span class="icon-star text-warning"></span>
          <span class="icon-star text-warning"></span>
          <span class="icon-star text-warning"></span>
          <span class="icon-star-o text-warning"></span>
        </div>
        <blockquote class="mb-4">
          <p>Mudah Dipelajari</p>
        </blockquote>
        <div class="d-flex v-card align-items-center">
          <img src="images/image.png" alt="Image" class="img-fluid mr-3">
          <div class="author-name">
            <span class="d-block">Zainal</span>
            <span>Student</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@include('layouts.footer')