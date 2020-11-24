@extends('admin_layout.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Laporan Transaksi</h1>
              <a href="{{url('site/admin/report')}}" class="btn btn-danger float-left mx-5">Kembali</a>

          </div>
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="TABLE_TRANSAKSI_2">
                      <thead class="thead-light">
                        <tr>
                          <th class="thead">No</th>
                          <th class="thead">Nama Pelanggan</th>
                          <th class="thead">Kelas Pilihan</th>
                          <th class="thead">Bukti Transfer</th>
                          <th class="thead">Status</th>
                        </tr>
                      </thead>
                        <tbody>
                          @foreach ($transaksi as $item)    
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->user->email}}</td>
                            <td>{{$item->kelas->nama_kelas}}</td>
                            <td><img src="{{url($item->photo)}}" width="100px" alt=""></td>
                            <td>{{$item->status}}</td>
                          @endif
                           {{-- <a href="{{route('transcation.detail', $item->id)}}" class="btn btn-primary">Detail</a> --}}
                          </td>
                              {{-- <td><a href="" class="btn btn-primary mx-2">Berhasil</a><a href="" class="btn btn-danger mx-2">Ditolak</a><a href="" class="btn btn-info mx-2">Detail</a></td> --}}
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