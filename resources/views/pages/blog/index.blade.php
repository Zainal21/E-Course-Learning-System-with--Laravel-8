@include('layouts.header')
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-10 text-center animate__animated animate__fadeInDown">
        <h1><strong>Blog</strong></h1>
      </div>
    </div>
  </div>
<div class="site-section bg-light">
<div class="container">
  <div class="row">
    @forelse ($blog as $item)
    <div class="col-lg-4 col-md-6 mb-4 shadow">
      <div class="post-entry-1 h-100">
        <a href="{{route('blog-detail', $item->slug)}}" class="thumbnail-link">
          <img src="{{url($item->thumbnail)}}" alt="Image"
           class="img-fluid" width="100%">
        </a>
        <div class="post-entry-1-contents">
          
        <h2><a href="{{route('blog-detail', $item->slug)}}">{{$item->title}}</a></h2>
        <span class="meta d-inline-block mb-3">{{date('d-m-Y',strtotime($item->created_at))}}<span class="mx-2">by</span> {{$item->author}}</span>
          <p>{{\Str::limit($item->isi, 20)}}</p>
        </div>
      </div>
    </div>
    @empty
  </div>
  <div class="alert alert-danger">Data Tidak Ditemukan</div>   
 @endforelse
</div>
</div>
