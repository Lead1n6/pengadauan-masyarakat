@extends('layouts.admin')

@section('title', 'Detail Masyarakat')
    
@section('css')
    <style>
        .text-primary{
            text-decoration: underline;
        }
        .text-grey{
            color: #6c757d;
        } 
        .text-grey:hover{
            color: #6c757d;
        }     
        
    </style>
    
@endsection

@section('header')
   <a href="{{ route('masyarakat.index') }}" class="text-primary">Data Masyarakat</a>
   <a href="" class="text-grey"></a>
   <a href="" class="text-grey">Detail Masyarakat</a>
@endsection

@section('content')
   <div class="row">
      <div class="col-lg-6 col-12">
         <div class="card">
            <div class="card-header text-light text-center" style="background-color:#6a8afc">
                <div class="text-content">
                    <b>Detail Masyarakat</b>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>NIK</th>
                            <td>:</td>
                            <td>{{ $masyarakat->nik }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>{{ $masyarakat->nama }}</td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td>:</td>
                            <td>{{ $masyarakat->username }}</td>
                        </tr>
                        <tr>
                            <th>No Telp</th>
                            <td>:</td>
                            <td>{{ $masyarakat->telp}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
         </div>
      </div>
   </div>
   <br>
   {{-- @csrf
   <a href="{{ route('masyarakat.delete', $masyarakat->nik)}}" class="btn btn-danger pt-2">Delete Data</a>
   @method('DELETE') --}}
   
    {{-- <form action="{{ route('masyarakat.destroy', $masyarakat->nik)}}" method="POST">
    <button type="submit" class="btn btn-danger mt-2" style="width: 49%">HAPUS</button>
 </form>  --}}

   <div class="row pt-5">
    <div class="col-lg-6 col-12">
       <div class="card">
          <div class="card-header text-light text-center" style="background-color:#6a8afc">
              <div class="text-content">
                  <b>Laporan Yang Pernah Di Adu</b>
              </div>
          </div>
          <div class="card-body">
              <table class="table">
                  <tbody>
                      <tr>
                        <th style="font-family: Times New Roman">Pengaduan</th>
                        <td>:</td>
                       <td>{{ $pengaduan->isi_laporan}}</td>
                      </tr>
                      <tr>
                        <th style="font-family: Times New Roman">Tanggal Pengaduan</th>
                        <td>:</td>
                        <td>{{ $pengaduan->tgl_pengaduan }}</td>
                     </tr>
                  </tbody>
              </table>
          </div>
       </div>
    </div>
 </div>  
@endsection