@include('layouts.header')
<div class="container">
  <div class="row align-items-center justify-content-center">
    <div class="col-lg-10 text-center animate__animated animate__fadeInDown">
      <h1><strong><?= $materi->kelas->nama_kelas ? $materi->kelas->nama_kelas : 'Data Kelas Belum Terdapat Materi' ?> </strong></h1>
      <p>
        <span class="mr-2 mb-2">{{$materi->kelas->level}}</span>
        <span class="mr-2 mb-2">{{$materi->kelas->created_at}}</span>
      </p>
    </div>
  </div>
</div>
</div>
<div class="site-section">
<div class="container">
  <div class="row mb-5">
    <div class="col-md d-flex justify-content-center">
      <div class="box-side mb-3">
      <iframe src="{{$materi->link_materi}}" allowfullscreen="" allowtransparency="" width="560" height="349"  allow="autoplay" aria-controls="" width="560%"></iframe>
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
      @forelse ($list_materi as $item)
      <ul class="list-unstyled tutorial-section-list shadow" style="border-radius: 5px">
        <li style="border-radius: 5px">
           <h3 class="mt-2">{{$item->nama_materi}}<span class="badge badge-success float-right text-white ">Materi Siap</span></h3>
        </li>    
      </ul>
      @empty
           <div class="alert alert-danger">Materi Kelas tidak ditemukan</div> 
      @endforelse
    </div>
    <div class="col-md-4">
      <div class="box-side mb-3" style="border-radius: 20px">
      <img src="{{url($materi->kelas->thumbnail)}}" alt="Image" class="img-fluid">
         <h3><a href="#">{{$materi->kelas->nama_kelas}}</a></h3>
        <p class="mb-0 text-muted">
          <span class="mr-2 mb-2"><div class="badge badge-success text-white">{{$materi->kelas->level}}</div><div class="badge badge-danger mx-2">{{$materi->kelas->created_at}}</div></span>
        </p>
        @auth
            @if (auth()->user())
                @if(!$akses_kelas)
                  <a href="{{url('/transaksi-kelas/' . $materi->kelas->slug)}}" class="btn custom-btn btn-primary">Ikuti kelas</a>  
                @else
                  <a href="{{url('/mulai-kelas/' . $materi->kelas->id . '/video-materi/' . $materi->id) }}"
                    class="btn btn-primary custom-btn">Lanjutkan Belajar</a>
                @endif
            @endif 
        @endauth
        @guest
            <a href="{{url('/login')}}" class="btn custom-btn btn-primary">Login</a>
        @endguest
      </div>
    </div>
  </div>
  @include('components.related_class')
</div>
</div>
<div class="site-section bg-light">
  @include('components.testimonial')
</div>
@include('layouts.footer')