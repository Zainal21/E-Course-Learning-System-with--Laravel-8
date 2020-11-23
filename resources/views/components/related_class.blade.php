<div class="row justify-content-center">
  <div class="col-lg-7 text-center mb-5">
    <div class="heading">
      <span class="caption">Kelas terkait</span>
      <h2>Lihat Daftar Kelas Yang Serupa</h2>
    </div>
  </div>
</div>
<div class="row">
  @forelse ($kelas as $item) 
  <div class="col-md-6  animate__animated animate__fadeInDown" style="animation-delay: 0.9s">
    <div class="d-flex tutorial-item mb-4" style="border-radius: 20px">
      <div class="img-wrap">
      <img src="{{url($item->thumbnail)}}" alt="Image" class="img-fluid">
      </div>
      <div>
      <h3><a href="#">{{$item->nama_kelas}}</a></h3>
      <p>{{\Str::limit($item->deskripsi, 200)}}</p>
        <p class="meta">
        <span class="mr-2 mb-2">{{$item->level}}</span>
        <span class="mr-2 mb-2">{{$item->created_at}}</span>
        </p>
      <p><a href="/materi-kelas/{{$item->slug}}" class="btn btn-primary custom-btn">Lihat Detail Kelas</a></p>
      </div>
      
    </div>
  </div>
  @empty
</div>
<div class="d-flex tutorial-item mb-4">
  <div class="alert alert-danger">Maaf Kelas Tidak Tersedia</div>
</div>
@endforelse