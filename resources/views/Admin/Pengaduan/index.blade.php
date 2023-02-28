@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    @endsection

@section('header', 'Data Pengaduan')

@section('content')
   <table id="pengaduanTable" class="table">
       <thead>
         <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Isi Laporan & Lokasi Kejadian</th>
            <th>Status</th>
            <th>Detail</th>
         </tr>
       </thead>
       <tbody>
           @foreach ($pengaduan as $k => $v)
         <tr>
            <td>{{ $k += 1 }}</td>
            <td>{{ $v->tgl_pengaduan->format('d-M-Y')}}</td>
            <td>{{ $v->isi_laporan }}</td>
            <td>
                @if ($v->status == '0')
                   <a href="#" class="badge badge-danger">Konfirmasi</a>
                @elseif($v->status == 'proses')
                   <a href="#" class="badge badge-warning text-white">Proses</a>
                @else
                   <a href="#" class="badge badge-primary">Selesai</a>      
                @endif
            </td>
            <td><a href="{{ route('pengaduan.show', $v->id_pengaduan) }}" style="text-decoration:underline" class="badge badge-success">Lihat</a></td>
         </tr>   
         @endforeach
       </tbody>
   </table>
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

@section('js')
     <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
       <script>
         $(document).ready(function () {
              $('#pengaduanTable').DataTable();
          });
       </script>
@endsection