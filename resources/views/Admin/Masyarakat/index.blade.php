@extends('layouts.admin')

@section('title', 'Halaman Masyarakat')
      
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('header', 'Data Masyarakat')

@section('content') 
   <table id="masyarakatTable" class="table">
     <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Telp</th>
        
            <th>Detail</th>
        </tr>
     </thead>
     <tbody>
        @foreach ($masyarakat as $k => $v)
        <tr>
            <td>{{ $k += 1}}</td>
            <td>{{ $v->nik}}</td>
            <td>{{ $v->nama}}</td>
            <td>{{ $v->username}}</td>
            <td>{{ $v->telp}}</td>
            
            <td><a href="{{ route('masyarakat.show', $v->nik) }}" style="text-decoration: underline" class="badge badge-success">Lihat</a></td>
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
    <footer class="text-black text-center p-5"  style="background-color: #ffffff;">
      <p>Created with love <i class="bi bi-hearts text-danger"></i><a href="https://www.instagram.com/louisdessry/" class="text-black fw-bold">Louis Desiriyanti</a></p>
  </footer>
@endsection

@section('js')
     <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
       <script>
         $(document).ready(function () {
              $('#masyarakatTable').DataTable();
          });
       </script>
@endsection
   
