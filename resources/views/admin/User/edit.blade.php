@extends('admin_layout.view_stucture')
@section('Content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Profile</h1>
        </div>
        <form action="{{url('site/admin/users/update/'. $user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">User Edit</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Email</label>
                                <input type="email" id="title" class="form-control  @error('email') is-invalid @enderror" name="email" autofocus=""
                                    value="{{$user->email}}">
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" id="title" class="form-control @error('name') is-invalid @enderror"
                                    name="name" autofocus="" value="{{$user->name}}">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Password</label>
                                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="" >
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Aksi</h4>
                        </div>
                        <div class="card-footer bg-whitesmoke">
                            <button type="submit" class="btn btn-simpan  btn-primary">
                                Simpan
                            </button>

                            <a href="{{url('/site/admin/users')}}" class="btn btn-danger  btn-secondary">
                                kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>
@endsection
