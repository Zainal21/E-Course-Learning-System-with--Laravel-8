<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Data Kelas</title>
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
            <h4>Laporan Data Kelas</h4>
          </div>
          <div class="card">
            <div class="card-body">
              <button class="btn btn-primary btn-cetak custom-btn float-right" onclick="window.print()">Cetak</button>
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" id="TABLE_KELAS_2">
                  <thead class="thead-light">
                    <tr>
                      <th class="thead">No</th>
                      <th class="thead">Nama Kelas</th>
                      <th class="thead">Deskripsi</th>
                      <th class="thead">Thumbnail</th>
                      <th class="thead">level</th>
                    </tr>
                  </thead>
                    <tbody>
                      @foreach ($kelas as $item)   
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama_kelas}}</td>
                        <td>{{\Str::limit($item->deskripsi, 20)}}</td>
                        <td><img src="{{url($item->thumbnail)}}" width="80px" alt="" srcset=""></td>
                        <td>{{$item->level}}</td>
                      </tr>
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