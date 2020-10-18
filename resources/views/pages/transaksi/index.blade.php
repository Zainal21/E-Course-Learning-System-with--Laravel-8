@include('layouts.header')
<div class="container">
  <div class="row align-items-center justify-content-center">
    <div class="col-lg-10 text-center animate__animated animate__fadeInDown">
      <h1> <strong>Checkout</strong></h1>
    </div>
  </div>
</div>
</div>
<div class="site-section bg-light">
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="heading mb-4">
        <span class="caption">Enroll</span>
        <h2>Saya</h2>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="d-flex tutorial-item mb-4">
        <div class="img-wrap">
        <a href="#"><img src="{{url($kelas->thumbnail)}}" alt="Image" class="img-fluid"></a>
        </div>
        <div>
        <h3><a href="#">{{$kelas->nama_kelas}}</a></h3>
        <p>{{\Str::limit($kelas->deskripsi, 20)}}</p>
          <p class="meta">
            <span class="mr-2 mb-2">{{$kelas->level}}</span>
            <span class="mr-2 mb-2">{{$kelas->created_at}}</span>
          </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="d-flex tutorial-item mb-4">
        <form action="" class="form-group">
          <h3><a href="#"><strong>Check Out</strong></a></h3>
           <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="" value="{{auth()->user()->email}}" class="form-control">
           </div>
            <div class="form-group">
              <label for="">Nama</label>
              <input type="email" name="text" id=""  value="{{auth()->user()->name}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Total Bayar</label>
              <input type="number" name="email" id="" class="form-control"  value="{{$kelas->harga}}">
            </div>
            <div class="form-group">
              <label>Gambar</label>
              <div class="custom-file">
                  <input type="file" accept="image/*" name="photo" id="cover" class="form-control">
              </div>
          </div>
            <button type="submit" class="btn btn-primary my-4">Bayar Sekarang</button>
            <a href="{{url('/')}}" class="btn btn-danger my-4">Kembali</a>
          </form>
      </div>
    </div>
  </div>
</div>
</div>
@include('layouts.footer')