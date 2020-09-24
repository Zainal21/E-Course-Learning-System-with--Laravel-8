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
                          <th class="thead">Aksi</th>
                        </tr>
                      </thead>
                        <tbody>
                          @foreach ($kelas as $item)   
                          <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$item->nama_kelas}}</td>
                          <td>{{$item->deskripsi}}</td>
                          <td>{{$item->thumbnail}}</td>
                            <td><a href="" class="btn btn-danger ml-2 mr-2 mt-1">Delete</a><a href="" class="btn btn-success ml-2 mr-2 mt-1">Edit</a></td>
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