<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    

    <title>Dashboard</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        
        
        @yield('css')

        <style>
                .btn-purpuple{
            background: #6a70fc;
            border:1px solid #6a70fc;
            color:#fff;
            width: 100%;
        }
          
        </style>
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header" style="background-color: #4c69ed">
                <h3 class="mb-0">SUARKAT</h3>
                <p class="text-white mb-0">Suara Masyarakat</p>
            </div>

            <ul class="list-unstyled components">
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.index')}}"><b style="font-family: Times New Roman"><i class="bi bi-speedometer2"></i>   Dashboard</a></b>
                </li>
                <li class="{{ Request::is('admin/pengaduan') ? 'active' : '' }}">
                    <a href="{{ route('pengaduan.index')}}"><b style="font-family: Times New Roman"><i class="bi bi-building-add"></i>   Pengaduan</a></b>
                </li>
                <li class="{{ Request::is('admin/petugas') ? 'active' : '' }}">
                    <a href="{{ route('petugas.index')}}"><b style="font-family: Times New Roman"><i class="bi bi-person-rolodex"></i>   Petugas</a></b>
                </li>
                <li class="{{ Request::is('admin/masyarakat') ? 'active' : '' }}">
                    <a href="{{ route('masyarakat.index')}}"><b style="font-family: Times New Roman"><i class="bi bi-people-fill"></i>   Masyarakat</a></b>
                </li>
                <li class="{{ Request::is('admin/laporan') ? 'active' : '' }}">
                    <a href="{{ route('laporan.index')}}"><b style="font-family: Times New Roman"><i class="bi bi-clipboard-data"></i>   Laporan</a></b>
                </li>
                <li class="logoutt">
                    <a href="{{ route('admin.logout') }}"><b style="font-family: Times New Roman"><i class="bi bi-box-arrow-left"></i>   Keluar</a></b>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="ml-2">@yield('header')</div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <a href="#" id="keluar"><i class="bi bi-person-fill-gear "></i> Selamat Datang <b class="text text-danger">{{ Auth::guard('admin')->user()->nama_petugas }}</a></b>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });

    </script>
       @yield('js')
    </body>

      {{-- <!--sweet alert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
      $(function(){
        $(document).on('click','#keluar', function(e){
            e.preventDefault();
              var link = $(this).attr("href");
            Swal.fire({
            title: 'Anda Keluar Dari Halaman Dashboard',
            width: 600,
            padding: '3em',
            color: '#716add',
            background: '#fff url(/images/trees.png)',
            backdrop: `
                rgba(0,0,123,0.4)
                url("/images/nyan-cat.gif")
                left top
                no-repeat
            `
            }) .then((result)=>{
            //   $.ajax({
            //     headers:{
            //         'X-CSRF-TOKEN':$('meta[name=csrf-token]').attr('content')

            //     }, url:'/logout', 
            //     type: 'get', 
            //     success:function(){
            //         alert('Logout Berhasil');
            //     },  error:function(err){
            //         alert(err.responseText); 
            //     }
            //   });
              
            // });
            window.location='{{url("/logout")}}';});
        });
      });
    </script> --}}

</html>
