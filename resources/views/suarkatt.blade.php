@extends('layouts.user')


@section('content') 
  
<link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
  
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #0C4BEC;">
  <div class="container">
    <a class="navbar-brand" href="#">SUARA MASYARAKAT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#prosedur">Prosedur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pekat.index') }}">Lapor</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--jombotron-->
<br>
<section id="home" >
<div class="jumbotron text-center mb-3 p-5" style="background-color: #D1DBFF;">
       <img src="img/tes.png" alt="tes.png" width="350">
     <h1 class="" style="font-family: Times New Roman">SELAMAT DATANG DI LAYANAN PENGADUAN MASYARAKAT</h1>
     <p class="lead">Hal terpenting dalam mengelola pengaduan masyarakat adalah kecepatannya dalam merespon dan menindaklanjuti suatu pengaduan</p>
      <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
   </div>
</div>
</section>
<!--akhir jombotron-->

<!--Tentang-->
<br>
<section id="about" style="padding-top: 5rem;">
    <div class="container px-4 text-center">
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card-body">
                  <h3 class="card-title" style="font-family: Times New Roman"><b>Tentang Kami</b></h3>
                  <p class="card-text"> <p>Meningkatan melancarkan sebuah kejadian yang diadu, praktis dan hemat waktu untuk melaporakan sebuah kejadian. Proses sangat cepat, tepat, dan tuntas sesuai yang di adukan. Pengelolaaan pengaduan pelayanan publik secara 
                    efektif,memudahkan masyarakat untuk mengatasi masalah. Dengan adanya Suarkat Suara Rakyat masyarakat bisa melakukan pengaduan secara online.</p></p>
              </div>
            </div>
            <div class="col-sm-6">
                <div class="card-body">
                    <div class="p-3"> <img src="img/new.svg" class="rounded float-right img-fluid" alt="Responsive image" style="padding-top: 10px;"></div>
              </div>
            </div>
          </div>
      </div>
          
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#D1DBFF" fill-opacity="1" d="M0,192L30,202.7C60,213,120,235,180,224C240,213,300,171,360,176C420,181,480,235,540,240C600,245,660,203,720,192C780,181,840,203,900,224C960,245,1020,267,1080,256C1140,245,1200,203,1260,202.7C1320,203,1380,245,1410,266.7L1440,288L1440,320L1410,320C1380,320,
  1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
</section>
<!--Akhir Tentang-->

<!--prosedur-->
<section id="prosedur" style="background-color: #D1DBFF;">
    <div class="container" style="padding-top: 1rem;">
        <div class="row text mb-3">
          <div class="jumbotron text-center mb-3 p-3" style="background-color: #D1DBFF;">
          <div class="display-4" style="font-family: Times New Roman">PROSEDUR</div>
          <p class="">Hal terpenting dalam mengelola pengaduan masyarakat adalah kecepatannya dalam merespon dan menindaklanjuti suatu pengaduan</p>
           <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        </div>
     </div>
        </div>
        <div class="row pt-1">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body"  style="shadow p-3 mb-5 bg-body-tertiary rounded">
                  <h5 class="card-title"><i class="bi bi-people align-right" style="color:#f450a5"></i>Daftar/Masuk</h5>
                  <p class="card-text">Daftar terlebih dahulu sebelum melakaukan pengaduan. Setelah mendaftar, Login untuk menulis pengaduan anda di halaman Suarkat (Suara Masyarakat).</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body"  style="shadow p-3 mb-5 bg-body-tertiary rounded">
                  <h5 class="card-title"><i class="bi bi-pencil-square" style="color:#ccb72f"></i>Tulis Pengaduan</h5>
                  <p class="card-text">Tulis pengaduan yang sesuai dengan masalah yang anda alami atau yang anda temukan dan sertakan bukti foto tentang kejadian yang dialami.</p>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body"  style="shadow p-3 mb-5 bg-body-tertiary rounded">
                  <h5 class="card-title"><i class="bi bi-clipboard2-check" style="color:#50c0f4"></i>Verifikasi Pengaduan</h5>
                  <p class="card-text">Jika anda sudah mengirim pengaduan maka, pengaduan anda akan di proses oleh petugas.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body"  style="shadow p-3 mb-5 bg-body-tertiary rounded">
                  <h5 class="card-title"><i class="bi bi-megaphone" style="color:#2fd024"></i>Proses Tindak Lanjut</h5>
                  <p class="card-text">Setelah melalui verifikasi oleh petugas, selanjutnya kami akan tindak lanjuti</p>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body"  style="shadow p-3 mb-5 bg-body-tertiary rounded">
                  <h5 class="card-title"><i class="bi bi-chat-dots" style="color:#c00bd0"></i>Beri Tanggapan</h5>
                  <p class="card-text">Setelah kami tindak lanjuti, maka anda tinggal menunggu tanggapan dari kami.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body"  style="shadow p-3 mb-5 bg-body-tertiary rounded">
                  <h5 class="card-title"><i class="bi bi-send-check"  style="color:#f35344"></i>Selesai</h5>
                  <p class="card-text">Anda bisa melihat tanggapan atau status pengadauan anda di halaman branda anda.</p>
                </div>
              </div>
            </div>
          </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffffff" fill-opacity="1" d="M0,192L30,202.7C60,213,120,235,180,224C240,213,300,171,360,176C420,181,480,235,540,240C600,245,660,203,720,192C780,181,840,203,900,224C960,245,1020,267,1080,256C1140,245,1200,203,1260,202.7C1320,203,1380,245,1410,266.7L1440,288L1440,320L1410,
            320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
</section>
<!--Akhir prosedur-->


<!---faater-->
<footer class="text-black text-center p-5"  style="background-color: #ffffff;">
  <p>Created with love <i class="bi bi-hearts text-danger"></i><a href="https://www.instagram.com/louisdessry/" class="text-black fw-bold">Louis Desiriyanti</a></p>
</footer>
@endsection