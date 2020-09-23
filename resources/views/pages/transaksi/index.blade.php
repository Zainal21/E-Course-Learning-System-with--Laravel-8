@include('layouts.header')
<div class="container">
  <div class="row align-items-center justify-content-center">
    <div class="col-lg-10 text-center">
      <h1> <strong>Checkout</strong></h1>
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
    <div class="col-lg-6 text-lg-right">
      <div class="d-inline-flex align-items-center ml-auto">
        <span class="mr-4">Follow us:</span>
        <a href="#" class="mx-2 social-item"><span class="icon-facebook"></span></a>
        <a href="#" class="mx-2 social-item"><span class="icon-twitter"></span></a>
        <a href="#" class="mx-2 social-item"><span class="icon-linkedin"></span></a>
      </div>
    </div>
  </div>
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
          <p><a href="#" class="btn btn-primary custom-btn">Hapus</a></p>
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
    <div class="col">
      <div class="d-flex tutorial-item mb-4">
        <form action="" class="form-group">
          <h3><a href="#"><strong>Check Out</strong></a></h3>
            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control">
            <label for="">Nama</label>
            <input type="email" name="email" id="" class="form-control">
            <label for="">Total Bayar</label>
            <input type="email" name="email" id="" class="form-control">
            <button type="submit" class="btn btn-primary my-4">Bayar Sekarang</button>
            <a href="#" class="btn btn-danger my-4">Kembali</a>
          </form>
      </div>
    </div>
  </div>
</div>
</div>
@include('layouts.footer')