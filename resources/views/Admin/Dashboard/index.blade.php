@extends('layouts.admin') 

@section('title', 'Halaman Dashboard')

@section('header', 'Dashboard')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

@section('content')
  <div class="row">
    <div class="col-lg-3">
        <div class="card text-center shadow">
            <div class="card-header text-light" style="background-color: rgb(230, 78, 106)"><b>Petugas</b></div>
              <div class="card-body">
                <div class="text-center">
                    {{ $petugas }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card text-center shadow">
            <div class="card-header text-light" style="background-color: rgb(59, 133, 219)"><b>Masyarakat</b></div>
              <div class="card-body">
                <div class="text-center">
                    {{ $masyarakat }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card text-center shadow">
            <div class="card-header text-light" style="background-color: rgb(225, 202, 53)"><b>Pengaduan Proses</b></div>
              <div class="card-body">
                <div class="text-center">
                   {{ $proses }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 text-center">
        <div class="card shadow">
            <div class="card-header text-light" style="background-color: rgb(82, 200, 182)"><b>Pengaduan Selesai</b></div>
              <div class="card-body">
                <div class="text-center">
                    {{ $selesai }}
                </div>
            </div>
        </div>
    </div>
  </div>

  <br>

  <div class="container-fluid">
    <div class="row">
 
      <div class="col-md-12 shadow" style="background:rgb(255, 255, 255)">
        <canvas id="myChart" width="190" height="80"></canvas>
      </div>
    </div>
  </div>

  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ["{{ $petugas }} Petugas", "{{ $masyarakat }} Masyarakat", "{{ $proses }} Proses", "{{ $selesai }} Selesai",],
          datasets: [{
              label: 'pengguna',
              data: [{{ $petugas }}, {{ $masyarakat }},  {{ $proses }},  {{ $selesai }}],
              backgroundColor: [
                  'rgba(255, 99, 132)',
                  'rgba(54, 162, 235)',
                  'rgba(255, 206, 86)',
                  'rgba(75, 192, 192)',
                  'rgba(153, 102, 255)',
                  'rgba(255, 159, 64)'
              ],
              borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
    });
    </script>
  @endsection