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
              @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
              @endif
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="TABLE_TRANSAKSI">
                      <thead class="thead-light">
                        <tr>
                          <th class="thead">No</th>
                          <th class="thead">Nama Pelanggan</th>
                          <th class="thead">Kelas Pilihan</th>
                          <th class="thead">Bukti Transfer</th>
                          <th class="thead">Status</th>
                          <th class="thead">Aksi</th>
                        </tr>
                      </thead>
                        <tbody>
                          @foreach ($transaksi as $item)    
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->kelas->nama_kelas}}</td>
                            <td>{{$item->user->name}}</td>
                            <td><img src="{{url($item->photo)}}" width="100px" alt=""></td>
                            <td>{{$item->status}}</td>
                           <td> @if($item->status == 'Pending')
                            <a href="{{ route('transcation.status', $item->id) }}?status=sukses" class="btn btn-success ">
                              sukses
                            </a>
                            <a href="{{ route('transcation.status', $item->id) }}?status=gagal" class="btn btn-danger ">gagal </a>
                          @endif
                           <a href="{{route('transcation.detail', $item->id)}}" class="btn btn-primary">Detail</a>
                          </td>

                              {{-- <td><a href="" class="btn btn-primary mx-2">Berhasil</a><a href="" class="btn btn-danger mx-2">Ditolak</a><a href="" class="btn btn-info mx-2">Detail</a></td> --}}
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