<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!--To prevent most search engine web crawlers from indexing a page on your site-->
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">

    <title>Admin TemanBelajar</title>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('Backend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Backend/css/components.css')}}">
    <link rel="stylesheet" href="{{asset('Backend/css/custom.css')}}">

    {{-- @stack('style') --}}
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="{{asset('Backend/img/avatar.png')}}" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Admin</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- {{-- <div class="dropdown-title">Logged in 5 min ago</div> --}} -->
                            <a href="#" target="_blank" class="dropdown-item has-icon">
                                <i class="fas fa-external-link-alt"></i> View Site
                            </a>
                            <a href="#" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item has-icon text-danger" href="#"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>

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
                            <a class="nav-link" href="{{url('site/admin/transaksi')}}">
                                <i class="far fa-paper-plane"></i> <span>Transaksi Masuk</span>
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="{{asset('Backend/js/stisla.js')}}"></script>
    <script src="{{asset('Backend/js/scripts.js')}}"></script>
    <script src="{{asset('Backend/js/ckeditor.js')}}"></script>
    {{-- <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script> --}}
    <script>
        $('.js-upload-image').change(function(event) {
            makePreview(this);
            $('#upload-img-preview').show();
            $('#upload-img-delete').show();
        });

        function makePreview(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#upload-img-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#upload-img-delete').click(function(event) {
            event.preventDefault();

            $('#upload-img-preview').attr('src', '').hide();
            $('.custom-file-input').val(null);
            $(this).hide();
        });

      
        if ($('#description').length != 0) {
            CKEDITOR.replace('description', config);
        }
    </script>
   
</body>

</html>


{{-- // var config = {
  //     extraPlugins: 'uploadimage,image2',
  //     height: '30em',

  //     filebrowserBrowseUrl: '{{ url('elfinder/ckeditor') }}',
  //     filebrowserUploadUrl: '{{ route('cp.upload',['_token' => csrf_token()]) }}',

  //     stylesSet: [{
  //         name: 'Narrow image',
  //         type: 'widget',
  //         widget: 'image',
  //         attributes: {
  //             'class': 'image-narrow'
  //         }
  //     },{
  //         name: 'Wide image',
  //         type: 'widget',
  //         widget: 'image',
  //         attributes: {
  //             'class': 'image-wide'
  //         }
  //     }],

  //     contentsCss: [
  //         'https://cdn.ckeditor.com/4.11.3/full-all/contents.css',
  //     ],

  //     image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
  //     image2_disableResizer: true,
  //     removeDialogTabs: 'link:upload;image:upload',
  //     allowedContent: true
  // } --}}
