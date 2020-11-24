@extends('admin_layout.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Laporan Users</h1>
              <a href="{{url('site/admin/report')}}" class="btn btn-danger float-left mx-5">Kembali</a>
          </div>
          <div class="row">
            <div class="col">
              <div class="card">
               
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="TABLE_USER_2"> 
                      <thead class="thead-light">
                        <tr>
                          <th class="thead">No</th>
                          <th class="thead">username</th>
                          <th class="thead">email</th>
                          <th class="thead">role</th>
                        </tr>
                      </thead>
                        <tbody>
                          @foreach ($user as $item) 
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->role}}</td>
                          </tr>
                          {{-- Illuminate\Support\Facades\ --}}
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