@include('layouts.header')
      <div class="container">
        <div class="row align-items-center justify-content-center animate__animated animate__fadeInDown">
          <div class="col-lg-10 text-center">
            <h1>Silahkan<strong> Daftar</strong> agar menjadi <strong><br> Bagian dari Kami</strong></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light pb-0">
      <div class="container">
        <div class="row align-items-stretch overlap">
          <div class="col-md">
            @if (session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>
            @endif
            <div class="box h-100" style="border-radius: 5px">
              <div class="d-flex align-items-center">
               <div class="row">
                 <div class="col-md">
                   <div class="img" style="margin: auto">
                      <img src="{{asset('assets/images/dayne-topkin-cB10K2ugb-4-unsplash.jpg')}}" class="img-fluid" alt="Image">
                    </div>
                 </div>
                 <div class="col-md">
                  <div class="text">
                    <a href="#" class="category">Register</a>
                  <form action="{{url('/register')}}" method="POST" class="form-group">
                      @csrf
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="" value="{{old('name')}}">
                      @error('name')
                        <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="" value="{{old('email')}}">
                      @error('email')
                       <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="">
                      @error('password')
                       <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                        <label for="">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="">
                      @error('password')
                       <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                        <button type="submit" class="btn btn-primary my-3">Registrasi</button>
                        <a href="{{url('/login')}}" class="btn btn-danger">Kembali</a>
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
    @include('components.testimonial')
    <div class="container">
      @include('components.enroll_section')
    </div>
    @include('layouts.footer')