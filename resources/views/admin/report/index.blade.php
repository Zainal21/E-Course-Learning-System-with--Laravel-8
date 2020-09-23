@extends('admin_layout.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Laporan</h1>
          </div>
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Daftar data</h4>
                        </div>
                        <div class="card-body">
                          <a href="{{url('site/admin/report/user')}}" class="btn btn-primary">Laporan User</a>
                          <a href="{{url('site/admin/report/kelas')}}" class="btn btn-primary">Laporan Kelas</a>
                          <a href="{{url('site/admin/report/transaksi')}}" class="btn btn-primary">Laporan transaksi</a>
                        </div>
                    </div>
                </div>
            </div>
      </section>
  </div>
@endsection