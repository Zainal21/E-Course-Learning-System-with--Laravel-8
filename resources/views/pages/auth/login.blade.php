@include('layouts.header')
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-10 text-center">
            <h1>Silahkan<strong> Login</strong> agar dapat<strong> Berpartisipasi</strong></h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light pb-0">
      <div class="container">
        <div class="row align-items-stretch overlap">
          <div class="col-md">
            <div class="box h-100">
              <div class="d-flex align-items-center">
               <div class="row">
                 <div class="col">
                   <div class="img"><img src="{{asset('assets/images/image.png')}}" class="img-fluid" alt="Image"></div>
                 </div>
                 <div class="col">
                  <div class="text">
                    <a href="#" class="category">Login</a>
                   <form action="{{url('/login')}}" method="POST" class="form-group" id="form-login">
                      @csrf
                      <label for="">Email</label>
                      <input type="email" name="email" class="form-control" id="">
                      <label for="">Password</label>
                      <input type="password" name="password" class="form-control" id="">
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

      <div class="site-section bg-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 text-center mb-5">
              <div class="heading">
                <span class="caption">Testimoni</span>
                <h2>Apa Kata Mereka</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="testimonial-2">
                <h3 class="h5">Mudah Dipelajari</h3>
                <div>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star-o text-warning"></span>
                </div>
                <blockquote class="mb-4">
                  <p>Mudah Dipelajari</p>
                </blockquote>
                <div class="d-flex v-card align-items-center">
                  <img src="{{asset('assets/images/image.png')}}" alt="Image" class="img-fluid mr-3">
                  <div class="author-name">
                    <span class="d-block">Zainal</span>
                    <span>Student</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="testimonial-2">
                <h3 class="h5">Mudah Dipelajari</h3>
                <div>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star-o text-warning"></span>
                </div>
                <blockquote class="mb-4">
                  <p>Mudah Dipelajari</p>
                </blockquote>
                <div class="d-flex v-card align-items-center">
                  <img src="{{asset('assets/images/image.png')}}" alt="Image" class="img-fluid mr-3">
                  <div class="author-name">
                    <span class="d-block">Zainal</span>
                    <span>Student</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="testimonial-2">
                <h3 class="h5">Mudah Dipelajari</h3>
                <div>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star-o text-warning"></span>
                </div>
                <blockquote class="mb-4">
                  <p>Mudah Dipelajari</p>
                </blockquote>
                <div class="d-flex v-card align-items-center">
                  <img src="{{asset('assets/images/image.png')}}" alt="Image" class="img-fluid mr-3">
                  <div class="author-name">
                    <span class="d-block">Zainal</span>
                    <span>Student</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


     @include('layouts.footer')