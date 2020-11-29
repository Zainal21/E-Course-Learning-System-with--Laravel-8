@extends('admin_layout.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Total Kelas</h1>
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
                <a href="{{route('kelas.create')}}" class="btn btn-primary mt-2 mb-2 float-right">Add item</a>
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="TABLE_KELAS">
                      <thead class="thead-light">
                        <tr>
                          <th class="thead">No</th>
                          <th class="thead">Nama Kelas</th>
                          <th class="thead">Deskripsi</th>
                          <th class="thead">Thumbnail</th>
                          <th class="thead">level</th>
                          <th class="thead">Harga</th>
                          <th class="thead">Aksi</th>
                        </tr>
                      </thead>
                        <tbody>
                          @foreach ($kelas as $item)   
                          <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$item->nama_kelas}}</td>
                          <td>{{\Str::limit($item->deskripsi, 20)}}</td>
                          <td><img src="{{url($item->thumbnail)}}" width="80px" alt="" srcset=""></td>
                          <td>{{$item->level}}</td>
                          <td>{{$item->harga}}</td>
                          <td>
                            <form action="{{route('kelas.destroy', $item->id)}}" method="post" class="d-inline">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger ml-2 mr-2 mt-1">Delete</button>
                            </form>
                            <a href="{{route('kelas.edit',Crypt::Encrypt($item->id))}}" class="btn btn-success ml-2 mr-2 mt-1">Edit</a></td>
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