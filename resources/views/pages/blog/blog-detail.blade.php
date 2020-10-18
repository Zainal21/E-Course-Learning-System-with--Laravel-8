@include('layouts.header')
<div class="site-wrap" id="home-section"> 
    <div class="container">
      <div class="row align-items-center justify-content-center animate__animated animate__fadeInDown">
        <div class="col-lg-10 text-center">
        <h1><strong>{{$blog_detail->title}}</strong></h1>
        <div class="pb-4 get"><strong class="text-white">Posted on {{date('d-m-Y',strtotime($blog_detail->created_at))}} &bullet; By {{$blog_detail->author}}</strong></div>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
        <p>@php echo($blog_detail->isi) @endphp</p>
        </div>
        <div class="col-md-4 sidebar">
          <div class="sidebar-box">
          <img src="{{url($blog_detail->thumbnail)}}" alt="" class="img-fluid mb-4 w-50 rounded-circle">
            <h3 class="text-black">About The Author</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, nam. Molestiae, dolore ipsam aperiam enim rem quaerat! Ut officiis adipisci accusantium modi ratione dolore voluptatem natus, id soluta quis tenetur!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
