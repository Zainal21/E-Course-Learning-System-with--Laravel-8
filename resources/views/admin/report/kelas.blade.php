@extends('admin_layout.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Laporan Kelas</h1>
              <a href="{{url('site/admin/report')}}" class="btn btn-danger float-left mx-5">Kembali</a>

          </div>
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="TABLE_KELAS_2">
                      <thead class="thead-light">
                        <tr>
                          <th class="thead">No</th>
                          <th class="thead">Nama Kelas</th>
                          <th class="thead">Deskripsi</th>
                          <th class="thead">Thumbnail</th>
                          <th class="thead">level</th>
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