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
      <div class="d-flex tutorial-item mb-4" style="border-radius: 10px">
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
      <div class="d-flex tutorial-item mb-4" style="border-radius: 10px">
        <form action="{{route('transcation.class')}}" method="POST" class="form-group" enctype="multipart/form-data">
          @csrf
            <h2 class="text-center"><b>Check Out</b></h2>
            <hr>
            <div class="form-group">
              <label for="">Email</label>
              <input type="hidden" name="kelas_id" id="" value="{{$kelas->id}}" class="form-control">
              <input type="email" name="email" id="" value="{{auth()->user()->email}}" class="form-control">
            </div>
              <div class="form-group">
                <label for="">Nama</label>  
                <input type="text" name="name" id=""  value="{{auth()->user()->name}}" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Total Bayar</label>
                <input type="number" name="total_transaksi" id="" class="form-control"  value="{{$kelas->harga}}">
              </div>
              <div class="form-group">
                <p class="text-muted">BCA - 01818181818181818</p>
              </div>
              <div class="form-group">
                <label>Bukti Transfer</label>
                <div class="custom-file">
                  <input type="file" name="photo" class="form-control" required>
                </div>
            </div>
              <button type="submit" onclick="return confirm('Apakah Anda Yakin Untuk Membeli Kelas ini')" class="btn custom-btn btn-primary my-4">Bayar Sekarang</button>
              <a href="{{url('/kelas')}}" class="custom-btn btn btn-danger my-4">Kembali</a>
            </form>
       </div>
    </div>
  </div>
</div>
</div>
@include('layouts.footer')