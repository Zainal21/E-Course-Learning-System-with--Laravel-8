<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('Backend/css/style.css')}}">
</head>

<body>
    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="wrapper text-center">
                    <h2>Teman Belajar</h2>
                    <h5>Laporan Data Transaksi</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="TABLE_KELAS_2">
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
                                {{-- <a href="{{route('transcation.detail', $item->id)}}" class="btn
                                btn-primary">Detail</a> --}}
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

    <script>
        window.print()

    </script>
</body>

</html>
