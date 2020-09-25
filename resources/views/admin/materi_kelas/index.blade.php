@extends('admin_layout.view_stucture')
@section('Content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Materi Kelas</h1>
        </div>
        <div class="row">
            <div class="col">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('materi.create')}}" class="btn btn-primary mt-2 mb-2 float-right">Add item</a>
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" id="TABLE_KELAS">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="thead">No</th>
                                        <th class="thead">Nama Kelas</th>
                                        <th class="thead">Judul Materi</th>
                                        <th class="thead">Link / Source Materi</th>
                                        <th class="thead">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materi as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->kelas->nama_kelas}}</td>
                                        <td>{{$item->nama_materi}}</td>
                                        <td>{{$item->link_materi}}</td>
                                    <td><form action="{{route('materi.destroy', $item->id)}}" class="d-inline" method="POST">
                                      @csrf
                                      @method('DELETE')
                                          <button type="submit" class="btn btn-danger ml-2 mr-2 mt-1">Delete</button>  
                                    </form><a href="{{route('materi.edit',Crypt::Encrypt($item->id))}}"
                                                class="btn btn-success ml-2 mr-2 mt-1">Edit</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
