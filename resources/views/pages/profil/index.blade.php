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
                    <input type="text" name="" class="form-control" id="" value="{{$user->name}}">
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
          @forelse ($akses as $item)
          <div class="col-lg-8">
            <div class="d-flex tutorial-item mb-4">
              <div class="img-wrap">
                <a href="#"><img src="{{url($item->kelas->thumbnail)}}" alt="Image" class="img-fluid"></a>
              </div>
              <div>
                <h3><a href="#">{{$item->kelas->nama_kelas}}.</a></h3>
                <p>{{\Str::limit($item->kelas->deskripsi, 20)}}</p>
                <p class="meta">
                <span class="mr-2 mb-2">{{$item->kelas->level}}</span>
                  <span class="mr-2 mb-2">{{$item->kelas->created_at}}</span>
                </p>
              <p><a href="{{url('/materi-kelas/' . $item->kelas->slug)}}" class="btn btn-primary custom-btn">Lihat Kelas</a></p>
              </div>
            </div>
          </div>
          @empty
              <div class="alert alert-danger">Anda Belum Mempunyai Akses ke Kelas Apapun</div>
          @endforelse
        </div>
      </div>
      </div>


     @include('layouts.footer')