<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!--To prevent most search engine web crawlers from indexing a page on your site-->
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">

    <title>{{$title}}</title>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('Backend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Backend/css/components.css')}}">
    <link rel="stylesheet" href="{{asset('Backend/css/custom.css')}}">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.22/b-1.6.4/b-html5-1.6.4/r-2.2.6/datatables.min.css" />

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.bootstrap4.min.css" />

   

    {{-- @stack('style') --}}
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{asset('Backend/img/avatar.png')}}" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">{{Auth::user()->name}}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                             <a href="{{url('/site/admin/users/edit/'.Crypt::Encrypt(Auth::user()->id))}}" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                        <form action="{{route('admin.logout')}}" method="POST">
                            @csrf
                                <button class="dropdown-item has-icon text-danger"><i class="fas mt-2 fa-sign-out-alt"></i> Logout</button>
                            </form>
                  
                            <form id="logout-form" action="#" method="POST" style="display: none;">

                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{url('site/admin')}}"><strong>TemanBelajar</strong></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="#">CP</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="#">
                            <a class="nav-link" href="{{url('site/admin')}}">
                                <i class="fas fa-fire"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-header">Content</li>
                        <li class="#">
                            <a class="nav-link" href="{{route('posts.index')}}">
                                <i class="fas fa-newspaper"></i> <span>Blog</span>
                            </a>
                        </li>
                        <li class="menu-header">Media</li>
                        <li class="#">
                            <a class="nav-link" href="{{url('site/admin/kelas')}}">
                                <i class="far fa-paper-plane"></i> <span>Kelas</span>
                            </a>
                        </li>
                        <li class="#">
                            <a class="nav-link" href="{{url('site/admin/materi-kelas')}}">
                                <i class="far fa-paper-plane"></i> <span>Materi Kelas</span>
                            </a>
                        </li>
                        <li class="#">
                            <a class="nav-link" href="{{url('site/admin/transaksi')}}">
                                <i class="far fa-paper-plane"></i> <span>Transaksi Masuk</span>
                            </a>
                        </li>
                        <li class="menu-header">Laporan</li>
                        <li class="#">
                            <a class="nav-link" href="{{url('site/admin/report')}}">
                                <i class="fas fa-database"></i> <span>Report</span>
                            </a>
                        </li>
                        <li class="menu-header">Konfigurasi</li>
                        <li class="#">
                            <a class="nav-link" href="{{url('site/admin/users')}}">
                                <i class="fas fa-users"></i> <span>Users</span>
                            </a>
                        </li>
                        <li class="#">
                            <a class="nav-link" href="{{url('site/admin/setting')}}">
                                <i class="fas fa-cog"></i> <span>Setting</span>
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>

            @yield('Content')
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2020
                    <div class="bullet"></div> <a href="#">Muhamad Zainal Arifin</a>
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="{{asset('Backend/js/stisla.js')}}"></script>
    <script src="{{asset('Backend/js/scripts.js')}}"></script>
    <script src="{{asset('Backend/js/ckeditor.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>

    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.22/b-1.6.4/b-html5-1.6.4/r-2.2.6/datatables.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
    <script>
        $('.js-upload-image').change(function (event) {
            makePreview(this);
            $('#upload-img-preview').show();
            $('#upload-img-delete').show();
        });

        function makePreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#upload-img-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#upload-img-delete').click(function (event) {
            event.preventDefault();

            $('#upload-img-preview').attr('src', '').hide();
            $('.custom-file-input').val(null);
            $(this).hide();
        });


        if ($('#description').length != 0) {
            CKEDITOR.replace('description', config);
        }

       $(document).ready(function () {
            $('#TABLE_USER').DataTable();
        });
       $(document).ready(function () {
            $('#TABLE_TRANSAKSI').DataTable();
        });
        $(document).ready(function () {
            $('#TABLE_POST').DataTable();
        });
        $(document).ready(function () {
            $('#TABLE_KELAS').DataTable();
        });



        // report
        $(document).ready(function () {
            $('#TABLE_USER_2').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf','csv'
                ]
             }  
            );
        });
       $(document).ready(function () {
            $('#TABLE_TRANSAKSI_2').DataTable({ 
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf','csv'
                ]  
            });
        });
        $(document).ready(function ({}) {
            $('#TABLE_POST_2').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf','csv'
                ] 
            });
        });
        $(document).ready(function () {
            $('#TABLE_KELAS_2').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'excel', 'pdf','csv'
                    ]
            });
        });
    </script>

</body>

</html>


{{-- // var config = {
  //     extraPlugins: 'uploadimage,image2',
  //     height: '30em',

  //     filebrowserBrowseUrl: '{{ url('elfinder/ckeditor') }}',
// filebrowserUploadUrl: '{{ route('cp.upload',['_token' => csrf_token()]) }}',

// stylesSet: [{
// name: 'Narrow image',
// type: 'widget',
// widget: 'image',
// attributes: {
// 'class': 'image-narrow'
// }
// },{
// name: 'Wide image',
// type: 'widget',
// widget: 'image',
// attributes: {
// 'class': 'image-wide'
// }
// }],

// contentsCss: [
// 'https://cdn.ckeditor.com/4.11.3/full-all/contents.css',
// ],

// image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
// image2_disableResizer: true,
// removeDialogTabs: 'link:upload;image:upload',
// allowedContent: true
// } --}}
