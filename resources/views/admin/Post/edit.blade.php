@extends('admin_layout.view_stucture')
@section('Content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Postingan</h1>
        </div>
        <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Posts</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" class="form-control @error('title') is-invalid @enderror"
                                    name="title" autofocus="" value="{{$post->title}}">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Author</label>
                                <input type="text" id="title" class="form-control @error('author') is-invalid @enderror"
                                    name="author" autofocus="" value="{{Auth::user()->name}}">
                                @error('author')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Author</label>
                                <select name="status" class="form-control" id="">
                                    @if ($post->status == 'Publish')
                                        <option value="Publish" class="form-control" selected>Publish</option>
                                        <option value="Draf" class="form-control">Draft</option>
                                        @else
                                        <option value="Draf" class="form-control" selected>Draft</option>
                                        <option value="Publish" class="form-control">Publish</option>
                                        
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">isi</label>
                                <textarea id="isi" cols="30" rows="10"
                                    class="form-control @error('isi') is-invalid @enderror" style="height: auto;"
                                    name="isi">{{$post->isi}}</textarea>
                                @error('isi')
                                <div class="invalid-feedback">{{ $message }}</div>
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
                                <label>Gambar</label>
                                <div class="mb-2">
                                    <img src="" class="img-fluid" alt="" id="upload-img-preview" style="display: none;">
                                    <a href="#" class="text-danger" id="upload-img-delete" style="display: none;">Delete
                                        Cover Image</a>
                                </div>
                                <label>Gambar Sebelumnya</label>
                                <div class="mb-2">
                                    <img src="{{url($post->thumbnail)}}" class="img-fluid" alt=""
                                        style="display: block;">
                                </div>
                                <div class="custom-file">
                                    <input type="file" accept="image/*" name="thumbnail" id="cover"
                                        class="custom-file-input js-upload-image form-control">
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
