@include('layouts.header')
      <div class="container mb-5">
        <div class="row align-items-center justify-content-center animate__animated animate__fadeInDown">
          <div class="col-lg-10 text-center mb-5">
            <h1>Silahkan<strong> Login</strong> <span>Terlebih Dahulu</span></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light pb-0" style="margin-top: 0px">
      <div class="container">
        <div class="row align-items-stretch overlap">
          <div class="col-md">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <div class="box h-100" style="border-radius: 5px">
              <div class="d-flex align-items-center">
               <div class="row justify-content-center">
                 <div class="col-md" >
                   <div class="img" style="margin: auto"><img src="{{asset('assets/images/dayne-topkin-cB10K2ugb-4-unsplash.jpg')}}" class="img-fluid"  alt="Image" ></div>
                 </div>
                 <div class="col-md" >
                  <div class="text">
                    <a href="#" class="category">Login</a>
                   <form action="{{url('/login')}}" method="POST" class="form-group" id="form-login">
                      @csrf
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="" autocomplete="off">
                      @error('email')
                        <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="">
                      @error('password')
                        <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                        <input type="submit" class="btn btn-primary btn-login my-3" value="Login">
                        <a href="{{url('/register')}}" class="btn btn-danger my-3">Belum punya akun?</a>
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