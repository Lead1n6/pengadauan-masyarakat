@extends('layouts.admin')

@section('title', 'Halaman Laporan')

@section('header', 'Laporan Pengaduan')


@section('content')
    <div class="row">
        <div class="col-lg-4 col-12">
            <div class="card text-light">
                <div class="card-header text-center" style="background-color:#6a8afc">
                    <b>Cari Berdasarkan Tanggal</b> 
                </div>
                <div class="card-body">
                    <form action="{{ route('laporan.getLaporan')}}" method="POST">
                      @csrf
                       <div class="form-group">
                         <input type="text" name="from" class="form-control" placeholder="Tanggal Awal" onfocusin="(this.type='date')" onfocusout=
                         "(this.type='text')">
                       </div>
                       <div class="form-group">
                         <input type="text" name="to" class="form-control" placeholder="Tanggal Akhir" onfocusin="(this.type='date')" onfocusout=
                         "(this.type='text')">
                       </div>
                       <center><button type="submit" class="btn btn-warning" style="width: 50%">Cari Laporan</button></center>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-12">
            <div class="card-header text-center" style="background-color:#fdfdfd">
                <b>Data Berdasarkan Tanggal</b>

                  {{-- btn export exel--}}
                <div class="float-right">
                    @if ($pengaduan ?? '')
                        <a href="{{ route('laporan.cetakLaporan', ['from' => $from, 'to' => $to])}}" class="btn btn-danger">EXPORT PDF</a>
                    @endif
                </div>
                      
                {{-- btn export exel--}}
                <div class="float-right">
                    @if ($pengaduan ?? '')
                        <a href="{{ route('laporan.exportExcel', ['from' => $from, 'to' => $to])}}" class="btn btn-success">EXPORT EXCEL</a>
                    @endif
                </div>
                
            </div>
            <div class="card-body">
                @if ($pengaduan ?? '')
                  <table class="table">
                     <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Isi Laporan</th>
                            <th>Status</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($pengaduan as $k => $v)
                            <tr>
                                <td>{{ $k += 1 }}</td>
                                <td>{{ $v->tgl_pengaduan }}</td>
                                <td>{{ $v->isi_laporan}}</td>
                                <td>
                                 @if ($v->status == '0')
                                    <a href="#" class="badge badge-danger">Konfirmasi</a>
                                 @elseif($v->status == 'proses')
                                    <a href="#" class="badge badge-warning text-white">Proses</a>
                                 @else
                                    <a href="#" class="badge badge-primary">Selesai</a>      
                                 @endif
                                </td>
                            </tr>
                        @endforeach
                     </tbody>
                  </table>
                @else 
                <div class="text-center">
                    Tidak Ada Data
                </div>    
                @endif
            </div>
        </div>
    </div>
    <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
<br>
  <footer class="text-black text-center p-5"  style="background-color: #ffffff;">
    <p>Created with love <i class="bi bi-hearts text-danger"></i><a href="https://www.instagram.com/louisdessry/" class="text-black fw-bold">Louis Desiriyanti</a></p>
</footer>
@endsection