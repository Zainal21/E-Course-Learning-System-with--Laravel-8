@extends('admin_layout.view_stucture')
@section('Content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Materi</h1>
        </div>
        <form action="{{route('materi.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Materi Kelas</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Judul Materi</label>
                                <input type="text" id="title"
                                    class="form-control @error('nama_materi') is-invalid @enderror" name="nama_materi"
                                    autofocus="" value="">
                                @error('nama_materi')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Kelas</label>
                                <select name="kelas_id" id="" class="form-control" required>
                                    <option value="" class="form-control">-Pilih Kategori-</option>
                                    @foreach ($kelas as $item)
                                    <option value="{{$item->id}}" class="form-control">{{$item->nama_kelas}}</option>>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Link Materi</label>
                                <input type="text" class="form-control @error('link_materi') is-invalid @enderror"
                                    name="link_materi" id="">
                                @error('link_materi')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
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
                        <div class="card-footer bg-whitesmoke">
                            <button type="submit" class="btn btn-simpan  btn-primary">
                                Simpan
                            </button>
                            <a href="{{url('/site/admin/materi-kelas')}}" class="btn btn-danger  btn-secondary">
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
