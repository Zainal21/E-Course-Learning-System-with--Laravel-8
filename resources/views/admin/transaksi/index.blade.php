@extends('admin_layout.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Transaksi</h1>
          </div>
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="TABLE_TRANSAKSI">
                      <thead class="thead-light">
                        <tr>
                          <th class="thead">No</th>
                          <th class="thead">Nama Pelanggan</th>
                          <th class="thead">Kelas Pilihan</th>
                          <th class="thead">Status</th>
                        </tr>
                      </thead>
                        <tbody>
                          @foreach ($transaksi as $item)    
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->kelas->nama_kelas}}</td>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->status}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                        {{-- 'kelas_id', 'user_id', 'total_transaksi' --}}
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
  </div>
@endsection