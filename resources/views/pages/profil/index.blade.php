@include('layouts.header')
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-10 text-center animate__animated animate__fadeInDown">
            <h1><strong> Profil</strong> Saya</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light pb-0">
      <div class="container">
        <div class="row align-items-stretch overlap">
          <div class="col-md">
            <div class="box h-100 shadow">
              <div class="d-flex align-items-center">
               <div class="row">
                 <div class="col">
                   <div class="img"><img src="{{asset('assets/images/image.png')}}" class="img-fluid rounded-circle" alt="Image"></div>
                 </div>
                 <div class="col">
                  <div class="text">
                    <a href="#" class="category">Profil Saya</a>
                    <form action="" class="form-group">
                      <label for="">Nama</label>
                    <input type="email" name="" class="form-control" id="" value="{{$user->name}}">
                      <label for="">Email</label>
                    <input type="email" name="email" class="form-control" id="" value="{{$user->email}}">
                      <label for="">Password</label>
                      <input type="password" name="password" class="form-control" id="">
                      <label for="">Konfirmasi Password</label>
                      <input type="password" name="password_confirmation" class="form-control" id="">
                      <button type="submit" class="btn btn-primary my-3">Ubah Profil</button>
                    </form>
                  <form action="{{route('admin.logout')}}" class="d-inline" method="POST">
                    @csrf
                      <button type="submit" class="btn btn-danger d-inline">Logout</button>
                    </form>
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
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="heading mb-4">
              <span class="caption">Kelas</span>
              <h2>Saya</h2>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="d-flex tutorial-item mb-4">
              <div class="img-wrap">
                <a href="#"><img src="{{asset('assets/images/image.png')}}" alt="Image" class="img-fluid"></a>
              </div>
              <div>
                <h3><a href="#">Learning Angular 101</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque
                  culpa tenetur facere quisquam, animi illum possimus!</p>
      
                <p class="mb-0">
                  <span class="brand-angular h5"></span>
                  <span class="brand-javascript h5"></span>
                </p>
                <p class="meta">
                  <span class="mr-2 mb-2">1hr 24m</span>
                  <span class="mr-2 mb-2">Advanced</span>
                  <span class="mr-2 mb-2">Jun 18, 2020</span>
                </p>
      
              <p><a href="{{url('/materi-kelas')}}" class="btn btn-primary custom-btn">Lihat Kelas</a></p>
              </div>
            </div>
            <div class="custom-pagination">
              <ul class="list-unstyled">
                <li><a href="#"><span>1</span></a></li>
                <li><span>2</span></li>
                <li><a href="#"><span>3</span></a></li>
                <li><a href="#"><span>4</span></a></li>
                <li><a href="#"><span>5</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </div>


     @include('layouts.footer')