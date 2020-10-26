@extends('admin_layout.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Blog / Postingan</h1>
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
                <a href="{{route('posts.create')}}" class="btn btn-primary mt-2 mb-2 float-right">Add item</a>
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="TABLE_POST">
                      <thead class="thead-light">
                        <tr>
                          <th class="thead">No</th>
                          <th class="thead">Judul</th>
                          <th class="thead">Thumbnail</th>
                          <th class="thead">Status</th>
                          <th class="thead">Aksi</th>
                        </tr>
                      </thead>
                        <tbody>
                          @foreach ($post as $item)  
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->title}}</td>
                           <td><img src="{{url($item->thumbnail)}}" alt="" width="80px"></td>
                            <td>{{$item->status}}</td>
                            <td>
                              <form action="{{route('posts.destroy', $item->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger ml-2 mr-2 mt-1">Delete</button>
                              </form>
                              <a href="{{route('posts.edit', Crypt::Encrypt($item->id))}}" class="btn btn-success ml-2 mr-2 mt-1">Edit</a></td>
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