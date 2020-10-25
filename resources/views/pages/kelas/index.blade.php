@include('layouts.header')
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-10 text-center animate__animated animate__fadeInDown">
            <h1>Kelas <strong>Kita</strong></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="heading mb-4">
              <span class="caption">Kelas</span>
              <h2>Terbaru</h2>
            </div>
          </div>
          @forelse ($kelas as $item) 
          <div class="col-lg-8 animate__animated animate__fadeInDown">
            <div class="d-flex tutorial-item mb-4">
              <div class="img-wrap">
                <a href="#"><img src="{{url($item->thumbnail)}}" alt="Image" class="img-fluid"></a>
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