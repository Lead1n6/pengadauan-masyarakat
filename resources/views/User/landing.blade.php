@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('title', 'PEKAT - Pengaduan Masyarakat')

@section('content')


<!--punya web satunya -->
@extends('layouts.pengaduan')
@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}"><script src="
http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> 
  
{{-- batas--}}

{{-- Section Header --}}
<section id="lapor" class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h4 class="semi-bold mb-0 text-white">SUARKAT</h4>
                    <p class="italic mt-0 text-white">Suara Masyarakat</p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    @if(Auth::guard('masyarakat')->check())
                    <ul class="navbar-nav text-center ml-auto">
                        <li class="nav-item">
                            <a class="nav-link ml-3 text-white" href="{{ route('pekat.laporan') }}">Laporan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-3 text-white" href="{{ route('pekat.logout') }}"
                                style="text-decoration: underline">{{ Auth::guard('masyarakat')->user()->nama }}</a>
                        </li>
                    </ul>
                    @else
                    <ul class="navbar-nav text-center ml-auto">
                        <li class="nav-item">
                            <button class="btn text-white" type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#loginModal">Masuk</button>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pekat.formRegister') }}" class="btn btn-outline-purple">Daftar</a>
                        </li>
                    </ul>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    <div class="text-center pt-5">
        <b><h2 class="medium text-white mt-3">Layanan Pengaduan Masyarakat</h2>
        <p class="italic text-white mb-5">Sampaikan laporan Anda langsung kepada yang pemerintah berwenang</p></b>
    </div>

    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div>
</section>

<div class="row justify-content-center">
    <div class="col-lg-6 col-6 col">
        <div class="content shadow" >
           
            <div class="card-header" style="background-color: #4c69ed;">
                <div style="color:#FAFAFC">
                    <center><h6 class="fas fa-comments"><b>       
                     Contoh Laporan Yang Diaduakan</b></h6></center>
                </div>
            </div>
            
            
                <div class="direct-chat-messages" >
                @foreach ($pengaduan as $dp)
                    
                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left text-danger"><b>Masyarakat</b></span>
                            <span class="direct-chat-timestamp float-right"></span>
                        </div>
                        <div class="direct-chat-text pt-2" style="background: rgb(136, 164, 241); font-family: Times New Roman">
                            <p align="right">
                                {{$dp->isi_laporan}}</p>
                        </div>
                    </div>
                    @if($dp->tanggapan != null)
                    @foreach($dp->tanggapan as $dpt)
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right text-primary"><b>Petugas</b></span>
                                <span class="direct-chat-timestamp float-left"></span>
                            </div>
                            <div class="direct-chat-text pt-2" style="background:rgb(151, 164, 212);font-family: Times New Roman">
                            {{$dpt->tanggapan}}
                            </div>
                        </div>
                        @endforeach
                    @endif
                  @endforeach
                </div>
                </div>
            </div>
                
        </div>
    </div>
</div> 


{{-- Ini yang asli --}}
{{--<div class="row justify-content-center">
    <div class="col-lg-6 col-10 col">
        <div class="content shadow">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif

            @if (Session::has('pengaduan'))
                <div class="alert alert-{{ Session::get('type') }}">{{ Session::get('pengaduan') }}</div>
            @endif

            <div class="card mb-3">Tulis Laporan Disini</div>
            <form action="{{ route('pekat.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <textarea name="isi_laporan" placeholder="Masukkan Isi Aduan dan Alamat Anda" class="form-control"
                        rows="4">{{ old('isi_laporan') }}</textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="foto" class="form-control">
                </div>
                <button type="submit" class="btn btn-custom mt-2">Kirim</button>
            </form>
        </div>
    </div>
</div> 


     Section Hitung Pengaduan 
    <div class="pengaduan mt-5">
        <div class="bg-purple">
            <div class="text-center">
                <h5 class="medium text-white mt-3">JUMLAH LAPORAN SEKARANG</h5>
                <h2 class="medium text-white">10</h2>
            </div>
        </div>
    </div>--}}
{{-- Footer --}}

<div class="text-center pt-5">
<footer>
    <p>Created with love <i class="bi bi-hearts text-danger"></i><a href="https://www.instagram.com/louisdessry/?next=%2F"  class="text-black fw-bold">Louis Desiriyanti</a></p>
</footer> 
</div>

{{-- Modal --}}
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="mt-3">Masuk terlebih dahulu</h3>
                <p>Silahkan masuk menggunakan akun yang sudah didaftarkan.</p>
                <form action="{{ route('pekat.login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-purple text-white mt-3" style="width: 100%">MASUK</button>
                </form>
                @if (Session::has('pesan'))
                <div class="alert alert-danger mt-2">
                    {{ Session::get('pesan') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    @if (Session::has('pesan'))
    <script>
        $('#loginModal').modal('show');

    </script>
    @endif
@endsection