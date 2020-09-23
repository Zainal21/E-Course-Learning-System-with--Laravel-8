@extends('admin_layout.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Setting</h1>
          </div>
          <form action="#" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Setting Website</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Nama website</label>
                                <input type="text" id="title" class="form-control" name="title" autofocus="" value="">
                            </div>
                            <div class="form-group">
                              <label for="title">Tagline</label>
                              <input type="text" id="title" class="form-control" name="title" autofocus="" value="">
                          </div>
                          <div class="form-group">
                              <label for="title">Alamat</label>
                              <input type="text" id="title" class="form-control" name="title" autofocus="" value="">
                          </div>
                          <div class="form-group">
                            <label for="title">Kode Analitic Google</label>
                            <input type="text" id="title" class="form-control" name="title" autofocus="" value="">
                          </div>
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea id="description" cols="30" rows="10" class="form-control" style="height: auto;" name="description"></textarea>
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
                                <label>Cover</label>
                                <div class="mb-2">
                                    <img src="" class="img-fluid" alt="" id="upload-img-preview" style="display: none;">
                                    <a href="#" class="text-danger" id="upload-img-delete" style="display: none;">Delete Cover Image</a>
                                </div>
                                <div class="custom-file">
                                    <input type="file" accept="image/*" name="cover" id="cover" class="custom-file-input js-upload-image form-control">
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