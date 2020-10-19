@include('layouts.header')
<div class="container">
  <div class="row align-items-center justify-content-center">
    <div class="col-lg-10 text-center animate__animated animate__fadeInDown">
      <h1><strong>Selamat Belajar</strong></h1>
    </div>
  </div>
</div>
</div>
<div class="site-section">
<div class="container">
  <div class="row mb-5">
    <div class="col-md">
      <div class="box-side mb-3">
      <iframe src="{{$daftar_materi->link_materi}}" allowfullscreen="" allowtransparency="" width="560" height="349"  allow="autoplay" aria-controls="" width="560%"></iframe>
       </div>
        <!-- Copy & Pasted from YouTube -->
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      @forelse ($materi as $item)
      <ul class="list-unstyled tutorial-section-list shadow">
        <li>
        <h3><a href="{{url('/mulai-kelas/'. $item->kelas->id.'/play/'. $item->id)}}">{{$item->nama_materi}}</a><span class="badge badge-success float-right text-white">Materi Siap</span></h3>
        </li>    
      </ul>
      @empty
           <div class="alert alert-danger">Materi Kelas tidak ditemukan</div> 
      @endforelse
      <a href="{{url('/')}}" class="btn btn-primary shadow mt-4 mb-2">Kembali ke beranda</a>
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