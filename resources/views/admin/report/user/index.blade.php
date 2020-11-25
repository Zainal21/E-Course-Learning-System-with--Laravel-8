<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Data User</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- Template CSS -->
<link rel="stylesheet" href="{{asset('Backend/css/style.css')}}">
<style>
  @media print{
    .btn-cetak{
      display:none;
    }
  }
</style>
</head>
<body>
   <!-- Main Content -->
    <div class="container mt-5">
      <div class="row">
        <div class="col">
          <div class="wrapper text-center">
            <h2>Teman Belajar</h2>
            <h4>Laporan Data User</h4>
          </div>
          <div class="card">
            <div class="card-body">
              <button class="btn btn-primary btn-cetak custom-btn float-right" onclick="window.print()">Cetak</button>
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" id="TABLE_KELAS_2">
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
    </div>
</body>
</html>