@extends('admin_layout.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Setting</h1>
          </div>
        <form action="{{route('setting.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-8">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Setting Website</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Nama_website">Nama website</label>
                            <input type="text" id="title" class="form-control @error('Nama_website') is-invalid @enderror" name="Nama_website" autofocus="" value="{{$setting->Nama_website}}">
                                @error('Nama_website')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="title">Tagline</label>
                              <input type="text" id="title" class="form-control @error('tagline') is-invalid @enderror" name="tagline" autofocus="" value="">
                              @error('tagline')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label for="title">Alamat</label>
                              <input type="text" id="title" class="form-control @error('alamat') is-invalid @enderror" name="alamat" autofocus="" value="">
                              @error('alamat')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="form-group">
                            <label for="title">Kode Analitic Google</label>
                            <input type="text" id="title" class="form-control @error('kode_analitic') is-invalid @enderror" name="kode_analitic" autofocus="" value="">
                            @error('kode_analitic')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea id="description" cols="30" rows="10" class="form-control @error('deskripsi') is-invalid @enderror" style="height: auto;" name="deskripsi"></textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Aksi</h4>
                        </div>
                        <div class="card-body">
                        </div>
                        <div class="card-footer bg-whitesmoke">
                            <button type="submit" class="btn btn-simpan  btn-primary">
                                Simpan
                            </button>
                        
                            <a href="{{url('/site/admin')}}" class="btn btn-danger  btn-secondary">
                                Batal
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </section>
  </div>
@endsection