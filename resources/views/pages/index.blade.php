@include('layouts.header')
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-10 text-center animate__animated animate__fadeInDown">
            <h1>Build Your  <strong>New Experience.</strong> & Build Your  <strong>Future Career</strong></h1>
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
               <div class="row">
                 <div class="col">
                   <div class="img"><img src="{{asset('assets/images/debby-hudson-asviIGR3CPE-unsplash.jpg')}}" class="img-fluid" alt="Image"></div>
                 </div>
                 <div class="col">
                  <div class="text ">
                    <a href="#" class="category">Continue <strong>Study</strong>,
                      Finish your <strong>Goals</strong></a>
                    <h2>Pelajari keahlian baru yang dibutuhkan oleh
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
          <div class="col-lg-6 mb-4 mb-lg-0">
            <form action="#" class="d-flex search-form">
              <span class="icon-"></span>
              <input type="search" class="form-control mr-2" placeholder="Cari Kelas">
              <input type="submit" class="btn btn-primary px-4" value="Search">
            </form>
          </div>
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
        <div class="col-md-6  animate__animated animate__fadeInDown" style="animation-delay: 0.9s">
          <div class="d-flex tutorial-item mb-4">
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
                  <img src="{{asset('assets/images/image.png')}}" alt="Image" class="img-fluid mr-3">
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
                  <img src="{{asset('assets/images/image.png')}}" alt="Image" class="img-fluid mr-3">
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
                  <img src="{{asset('assets/images/image.png')}}" alt="Image" class="img-fluid mr-3">
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