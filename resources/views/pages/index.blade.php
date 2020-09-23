@include('layouts.header')
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-10 text-center">
            <h1>Belajar Dengan Suasana Hati<strong> yang Tenang</strong> dan <strong>Berkualitas</strong></h1>
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
                    <a href="#" class="category">Overview Materi</a>
                    <h3><a href="#">Belajar NeXT JS</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quidem totam exercitationem eveniet
                      blanditiis nulla, et possimus, itaque alias maxime!</p>
                    <p class="mb-0">
                      <span class="brand-react h5"></span>
                      <span class="brand-javascript h5"></span>
                    </p>
                    <p class="meta">
                      <span class="mr-2 mb-2"></span> 1hr 24m</span>
                      <span class="mr-2 mb-2">Pemula</span>
                      <span class="mr-2 mb-2">14, September 2020</span>
                    </p>
                  </div>
                 </div>
               </div>
               
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="box small h-100">
              <div class="d-flex align-items-center mb-2">
                {{-- <div class="img"><img src="{{asset('assets/images/image.png')}}" class="img-fluid" alt="Image"></div> --}}
                <div class="text">
                  <a href="#" class="category">Materi 1</a>
                  <h3><a href="#">Pengenalan React Dasar</a></h3>
                </div>
              </div>
              <div class="d-flex align-items-center mb-2">
                {{-- <div class="img"><img src="{{asset('assets/images/image.png')}}" class="img-fluid" alt="Image"></div> --}}
                <div class="text">
                  <a href="#" class="category">Materi 2</a>
                  <h3><a href="#">Pengenalan Server side Rendering</a></h3>
                </div>
              </div>
              <div class="d-flex align-items-center">
                {{-- <div class="img"><img src="{{asset('assets/images/image.png')}}" class="img-fluid" alt="Image"></div> --}}
                <div class="text">
                  <a href="#" class="category">Tutorial</a>
                  <h3><a href="#">Pengenalan JAMStack</a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <form action="#" class="d-flex search-form">
              <span class="icon-"></span>
              <input type="search" class="form-control mr-2" placeholder="Search subjects">
              <input type="submit" class="btn btn-primary px-4" value="Search">
            </form>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="heading mb-4">
                <span class="caption">Kelas</span>
                <h2>Terbaru</h2>
              </div>
            </div>
            <div class="col-lg">
              <div class="d-flex tutorial-item mb-4">
                <div class="img-wrap">
                  <a href="#"><img src="{{asset('assets/images/image.png')}}" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <h3><a href="#">Learning React Native</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque
                    culpa tenetur facere quisquam, animi illum possimus!</p>

                  <p class="mb-0">
                    <span class="brand-react h5"></span>
                    <span class="brand-javascript h5"></span>
                  </p>
                  <p class="meta">
                    <span class="mr-2 mb-2">1hr 24m</span>
                    <span class="mr-2 mb-2">Advanced</span>
                    <span class="mr-2 mb-2">Jun 18, 2020</span>
                  </p>

                  <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
                </div>
              </div>

              <div class="d-flex tutorial-item mb-4">
                <div class="img-wrap">
                  <a href="#"><img src="{{asset('assets/images/image.png')}}" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <h3><a href="#">Belajar Vue JS Pemula</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque
                    culpa tenetur facere quisquam, animi illum possimus!</p>

                  <p class="mb-0">
                    <span class="brand-vue h5"></span>
                    <span class="brand-javascript h5"></span>
                  </p>
                  <p class="meta">
                    <span class="mr-2 mb-2">1hr 24m</span>
                    <span class="mr-2 mb-2">Advanced</span>
                    <span class="mr-2 mb-2">Jun 18, 2020</span>
                  </p>

                  <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
                </div>
              </div>

              <div class="d-flex tutorial-item mb-4">
                <div class="img-wrap">
                  <a href="#"><img src="{{asset('assets/images/image.png')}}" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <h3><a href="#">Belajar Adobe Photoshop Dasar</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque
                    culpa tenetur facere quisquam, animi illum possimus!</p>
                  <p class="mb-0">
                    <span class="brand-adobephotoshop h5"></span>
                  </p>
                  <p class="meta">
                    <span class="mr-2 mb-2">1hr 24m</span>
                    <span class="mr-2 mb-2">Advanced</span>
                    <span class="mr-2 mb-2">Jun 18, 2020</span>
                  </p>
                  <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
                </div>
              </div>

              <div class="d-flex tutorial-item mb-4">
                <div class="img-wrap">
                  <a href="#"><img src="{{asset('assets/images/image.png')}}" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <h3><a href="#">Belajar Abobe Illustrator</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque
                    culpa tenetur facere quisquam, animi illum possimus!</p>
                  <p class="mb-0">
                    <span class="brand-adobeillustrator h5"></span>
                  </p>
                  <p class="meta">
                    <span class="mr-2 mb-2">1hr 24m</span>
                    <span class="mr-2 mb-2">Advanced</span>
                    <span class="mr-2 mb-2">Jun 18, 2020</span>
                  </p>
                  <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
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