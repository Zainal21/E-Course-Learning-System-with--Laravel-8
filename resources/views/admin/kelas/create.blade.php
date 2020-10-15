@extends('admin_layout.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Tambah Kelas</h1>
          </div>
        <form action="{{route('kelas.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Kelas</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Nama Kelas</label>
                                <input type="text" id="title" class="form-control @error('nama_kelas') is-invalid @enderror" name="nama_kelas" autofocus="" value="">
                                @error('nama_kelas')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Level Kelas</label>
                                <select name="level" class="form-control @error('level') is-invalid @enderror " id="">
                                    <option value="Pemula" class="form-control">Pemula</option>
                                    <option value="Menengah" class="form-control">Menengah</option>
                                    <option value="Profesional" class="form-control">Profesional</option>
                                </select>
                                @error('level')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea id="" cols="30" rows="10" class="form-control @error('deskripsi') is-invalid @enderror" style="height: auto;" name="deskripsi"></textarea>
                                @error('nama_kelas')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Meta data</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Thumbnail</label>
                                <div class="mb-2">
                                    <img src="" class="img-fluid" alt="" id="upload-img-preview" style="display: none;">
                                    <a href="#" class="text-danger" id="upload-img-delete" style="display: none;">Delete Cover Image</a>
                                </div>
                                <div class="custom-file">
                                    <input type="file" accept="image/*" name="thumbnail" id="cover" class="custom-file-input js-upload-image form-control">
                                    <label class="custom-file-label " for="cover">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-whitesmoke">
                            <button type="submit" class="btn btn-simpan  btn-primary">
                                Simpan
                            </button>
                        
                            <a href="#" class="btn btn-danger  btn-secondary">
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