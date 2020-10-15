@include('layouts.header')
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-10 text-center">
            <h1>Kelas <strong>Kita</strong></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <form action="#" class="d-flex search-form">
              <span class="icon-"></span>
              <input type="search" class="form-control mr-2" placeholder="Search subjects">
              <input type="submit" class="btn btn-primary px-4" value="Search">
            </form>
          </div>
          <div class="col-lg-6 text-lg-right">
            <div class="d-inline-flex align-items-center ml-auto">
              <span class="mr-4">Follow us:</span>
              <a href="#" class="mx-2 social-item"><span class="icon-facebook"></span></a>
              <a href="#" class="mx-2 social-item"><span class="icon-twitter"></span></a>
              <a href="#" class="mx-2 social-item"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="heading mb-4">
              <span class="caption">Kelas</span>
              <h2>Terbaru</h2>
            </div>
          </div>
          @forelse ($kelas as $item) 
          <div class="col-lg-8">
            <div class="d-flex tutorial-item mb-4">
              <div class="img-wrap">
                <a href="#"><img src="{{asset('assets/images/image.png')}}" alt="Image" class="img-fluid"></a>
              </div>
              <div>
              <h3><a href="#">{{$item->nama_kelas}}</a></h3>
              <p>{{\Str::limit($item->deskripsi, 20)}}</p>
                <p class="meta">
                <span class="mr-2 mb-2">{{$item->level}}</span>
                  <span class="mr-2 mb-2">{{$item->created_at}}</span>
                </p>

                <p><a href="{{url('/materi-kelas/'. $item->slug)}}" class="btn btn-primary custom-btn">Lihat Kelas</a></p>
              </div>
            </div>
          </div>    
          @empty
              <div class="alert alert-danger">Kelas Tidak Ditemukan</div>
          @endforelse
          <div class="custom-pagination">
            {{ $kelas->links() }}
          </div>
        </div>
      </div>
    </div>
@include('layouts.footer')