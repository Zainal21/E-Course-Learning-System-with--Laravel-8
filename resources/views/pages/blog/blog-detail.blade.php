@include('layouts.header')
<div class="container">
  <div class="row align-items-center justify-content-center">
    <div class="col-lg-10 text-center animate__animated animate__fadeInDown">
      <h1>Baca <strong> Berita </strong> dan <strong> Informasi </strong> terkait <strong> teknologi </strong> dari Kami</h1>
    </div>
  </div>
</div>
</div>
  <div class="container">
      <div class="row align-items-center justify-content-center">
          <div class="col-lg-10 text-center animate__animated animate__fadeInDown">    
              <div class="pb-4 get"><strong class="text-white">Posted on
                      {{date('d-m-Y',strtotime($blog_detail->created_at))}} &bullet; By {{$blog_detail->author}}</strong>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="site-section bg-light pb-0" style="margin-top: -10%">
  <div class="container">
    <div class="row align-items-stretch overlap">
      <div class="col-md">
        <div class="box h-100">
          <div class="d-flex align-items-center">
           <div class="row">
             <div class="col-md">
               <div class="img"><img src="{{asset('assets/images/debby-hudson-asviIGR3CPE-unsplash.jpg')}}" class="img-fluid hero" alt="Image"></div>
             </div>
             <div class="col-md">
              <div class="text ">
              <h2><h1><strong>{{$blog_detail->title}}</strong></h1></h2>
                <p class="meta">
                  <span class="mr-2 mb-2">Penulis :</span>
                  <span class="mr-2 mb-2"> {{date('d-m-Y',strtotime($blog_detail->created_at))}} &bullet; By {{$blog_detail->author}}</strong></span>
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
<div class="container">
  <div class="row mt-5">
      <div class="col-md-8">
          <p>@php echo($blog_detail->isi) @endphp</p>
      </div>
  </div>
</div>

{{-- 
<div class="site-section bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 text-center mb-5">
        <div class="heading">
          <span class="caption">Lihat Artikel</span>
          <h2>Lihat Daftar Kelas Yang Serupa</h2>
        </div>
      </div>
    </div>
    <div class="row">
      @forelse ($blog as $item)
      <div class="col-lg-4 col-md-6 mb-4 shadow"  style="border-radius: 20px; background-color: whitesmoke">
        <div class="post-entry-1 h-100">
          <a href="{{route('blog-detail', $item->slug)}}" class="thumbnail-link">
            <img src="{{url($item->thumbnail)}}" alt="Image"
            class="img-fluid img-thumbnail mt-4" style="border-radius: 20px" width="100%">
          </a>
          <div class="post-entry-1-contents" style="background-color: whitesmoke">  
          <h2><a href="{{route('blog-detail', $item->slug)}}">{{$item->title}}</a></h2>
          <span class="meta d-inline-block mb-3" style="color: black">{{date('d-m-Y',strtotime($item->created_at))}}<span class="mx-2">by</span> {{$item->author}}</span>
            <p><strong>{{\Str::limit($item->isi, 20)}}</strong></p>
          </div>
        </div>
      </div>
      @empty
    </div>
    <div class="alert alert-danger">Data Tidak Ditemukan</div>   
  @endforelse
    </div>
  </div> --}}

@include('components.discus_comment')
@include('components.testimonial')
@include('layouts.footer')