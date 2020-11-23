@include('layouts.header')
      <div class="container" >
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-10 text-center text-white animate__animated animate__fadeInDown">
            <h1>Bangun  <strong>Pengalaman Baru Anda.</strong> </h1>
            <h1><strong>Karir Masa Depan Anda</strong></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light pb-0">
      <div class="container">
        <div class="row align-items-stretch overlap">
          <div class="col-md">
            <div class="box h-100">
              <div class="d-flex align-items-center">
               <div class="row justify-content-center">
                 <div class="col-md">
                   <div class="img mb-2" style="margin: auto">
                     <img src="{{asset('assets/images/debby-hudson-asviIGR3CPE-unsplash.jpg')}}" class="img-fluid hero" alt="Image"></div>
                 </div>
                 <div class="col-md">
                  <div class="text ">
                    <h2 class="banner">Pelajari keahlian baru yang dibutuhkan oleh
                      startup atau perusahaan IT terbesar di seluruh dunia</h2>
                    <p class="meta">
                      <span class="mr-2 mb-2">Founder :</span>
                      <span class="mr-2 mb-2">Muhamad Zainal Arifin</span>
                    </p>
                  </div>
                 </div>
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light">
      <div id="app"></div>
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="row">
            <div class="col-12">
              <div class="heading mb-4">
                <span class="caption">Kelas</span>
                <h2>Terbaru</h2>
              </div>
            </div>
        </div>
      </div>
      <div class="row">
        @forelse ($kelas as $item) 
        <div class="col-md-12  animate__animated animate__fadeInDown" style="animation-delay: 0.9s">
          <div class="d-flex tutorial-item mb-4" style="border-radius: 20px">
            <div class="img-wrap">
            <img src="{{url($item->thumbnail)}}" alt="Image" class="img-fluid">
            </div>
            <div>
            <h3><a href="#">{{$item->nama_kelas}}</a></h3>
            <p>{{\Str::limit($item->deskripsi, 200)}}</p>
              <p class="meta">
              <span class="mr-2 mb-2">{{$item->level}}</span>
              <span class="mr-2 mb-2">{{$item->created_at}}</span>
              </p>
            <p><a href="/materi-kelas/{{$item->slug}}" class="btn btn-primary custom-btn">Lihat Detail Kelas</a></p>
            </div>
            
          </div>
        </div>
        @empty
      </div>
      <div class="d-flex tutorial-item mb-4">
        <div class="alert alert-danger">Maaf Kelas Tidak Tersedia</div>
      </div>
    @endforelse
      </div>
     @include('components.testimonial')
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="row">
            <div class="col-12">
              <div class="heading mb-4">
                <span class="caption">Berita</span>
                <h2>Terbaru</h2>
              </div>
            </div>
        </div>
      </div>
      <div class="row">
        @forelse ($blog as $item) 
        <div class="col-md-12  animate__animated animate__fadeInDown" style="animation-delay: 0.9s">
          <div class="d-flex tutorial-item mb-4" style="border-radius: 20px">
            <div class="img-wrap">
            <img src="{{url($item->thumbnail)}}" alt="Image" class="img-fluid">
            </div>
            <div>
            <h3><a href="#">{{$item->title}}</a></h3>
            <p>{{\Str::limit($item->isi, 200)}}</p>
              <p class="meta">
              <span class="mr-2 mb-2">{{$item->status}}</span>
              <span class="mr-2 mb-2">{{$item->Author}}</span>
              </p>
            <p><a href="{{url('/blog-detail/'.$item->slug)}}" class="btn btn-primary custom-btn">Lihat Selengkapnya</a></p>
            </div>
            
          </div>
        </div>
        @empty
      </div>
      <div class="d-flex tutorial-item mb-4">
        <div class="alert alert-danger">Maaf Blog Tidak Tersedia</div>
      </div>
    @endforelse
  </div>

@include('components.enroll_section')

@include('layouts.footer')