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
                <a href="#" class="btn btn-primary mt-2 mb-2 float-right">Add item</a>
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="TABLE_TRANSAKSI">
                      <thead class="thead-light">
                        <tr>
                          <th class="thead">No</th>
                          <th class="thead">Judul</th>
                          <th class="thead">Kategori</th>
                          <th class="thead">Status</th>
                          <th class="thead">Aksi</th>
                        </tr>
                      </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>ini judul</td>
                            <td>Kategori</td>
                            <td>Status</td>
                            <td><a href="" class="btn btn-danger ml-2 mr-2 mt-1">Delete</a><a href="" class="btn btn-success ml-2 mr-2 mt-1">Edit</a></td>
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