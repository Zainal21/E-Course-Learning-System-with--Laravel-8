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
                          <th class="thead">Judul</th>
                          <th class="thead">Kategori</th>
                          <th class="thead">Status</th>
                        </tr>
                      </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>ini judul</td>
                            <td>Kategori</td>
                            <td>Status</td>
                          </tr>
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