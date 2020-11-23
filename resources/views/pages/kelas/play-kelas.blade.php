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
            <div class="col-md-12 d-flex justify-content-center">
                <div class="box-side mb-3" style="border-radius: 10px">
                    <iframe src="{{$daftar_materi->link_materi}}" allowfullscreen="" allowtransparency="" width="560"
                        height="349" allow="autoplay" aria-controls="" width="560%"></iframe>
                    <br>
                    <p>Materi : <b>{{$daftar_materi->nama_materi}}</b></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @forelse ($materi as $item)
                  <ul class="list-group">
                      <li class="list-group-item shadow px-2 my-2" style="border-radius: 5px">
                          <a href="{{url('/mulai-kelas/'. $item->kelas->id.'/video-materi/'. $item->id)}}"
                              class="mt-2 text-bold px-2 mb-5" style="text-decoration: none;color:black">
                              <strong>{{$item->nama_materi}}</strong>
                          </a><span class="badge badge-success float-right text-white mt-1">Materi Tersedia</span>
                      </li>
                  </ul>
                @empty
                  <div class="alert alert-danger">Materi Kelas tidak ditemukan</div>
                @endforelse
                <a href="{{url('/')}}" class="btn btn-primary shadow custom-btn mt-4 mb-2">Kembali ke beranda</a>
            </div>
        </div>
    </div>
</div>
<div class="site-section bg-light">
    @include('components.testimonial')
</div>
@include('layouts.footer')
