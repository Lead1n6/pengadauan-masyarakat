@extends('layouts.admin')

@section('title', 'Detail Pengduan')

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
        .btn-purpuple{
            background: #6a70fc;
            border:1px solid #6a70fc;
            color:#fff;
            width: 100%;
        }
            
        
    </style>
    
@endsection

@section('header')
   <a href="{{ route('pengaduan.index') }}" class="text-primary">Data Pengduan</a>
   <a href="" class="text-grey"></a>
   <a href="" class="text-grey">Detail Pengaduan</a>
@endsection

@section('content')
   <div class="row">
     <div class="col-lg-6 col-12">
        <div class="card shadow">
          <div class="card-header text-light" style="background-color:#6a8afc ">
            <div class="text-center">
              <b>Pengaduan Masyarakat</b>
            </div>
          </div>
             <div class="card-body">
                <table class="table">
                   <tbody>
                     <tr>
                        <th style="font-family: Times New Roman">NIK</th>
                        <td>:</td>
                        <td>{{ $pengaduan->nik }}</td>
                     </tr>
                     <tr>
                        <th style="font-family: Times New Roman">Tanggal Pengaduan</th>
                        <td>:</td>
                        <td>{{ $pengaduan->tgl_pengaduan }}</td>
                     </tr>
                     <tr>
                        <th style="font-family: Times New Roman">Foto</th>
                        <td>:</td>
                        <td><img src="{{ Storage::url($pengaduan->foto)}}" alt="Foto Pengaduan" class="embed-responsive"></td>
                     </tr>
                        <tr>
                            <th style="font-family: Times New Roman">Isi Laporan</th>
                            <td>:</td>
                            <td>{{ $pengaduan->isi_laporan}}</td>
                        </tr>
                        <tr>
                            <th style="font-family: Times New Roman">Status</th>
                            <td>:</td>
                            <td>
                                @if ($pengaduan->status == '0')
                                    <a href="#" class="badge badge-danger">Konfirmasi</a>
                                @elseif($pengaduan->status == 'proses')
                                    <a href="#" class="badge badge-warning text-white">Proses</a>
                                @else
                                    <a href="#" class="badge badge-success">Selesai</a>      
                                @endif    
                            </td>
                        </tr>
                   </tbody>
                </table>

                
                <center><form action="{{ route('pengaduan.destroy', $pengaduan->id_pengaduan)}}" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-danger"><b style="font-family: Times New Roman">Hapus Laporan Yang Diadu</b></button>
                 </form></center>


             </div>
        </div>
     </div>
     
        <div class="col-lg-6 col-12">
           <div class="card shadow">
              <div class="card-header text-light" style="background-color:#6a8afc">
                <div class="text-center">
                    <b>Tanggapan Petugas</b>
                </div>
              </div>
              <div class="card-body">
               <form action="{{ route('tanggapan.createOrUpdate') }}" method="POST">
                      @csrf
                   <input type="hidden" name="id_pengaduan" value="{{ $pengaduan->id_pengaduan }}">
                   <div class="form-group">
                       <label for="status"><b style="font-family: Times New Roman">Status</b></label>
                       <div class="input-group mb-3">
                           <select name="status" id="status" class="custom-select">
                               @if ($pengaduan->status == '0')
                                   <option selected value="0">Konfirmasi</option>
                                   <option value="proses">Proses</option>
                                   <option value="selesai">Selesai</option>
                               @elseif($pengaduan->status == 'proses')
                                   <option value="0">Konfirmasi</option>
                                   <option selected value="proses">Proses</option>
                                   <option value="selesai">Selesai</option>
                               @else
                                   <option value="0">Konfirmasi</option>
                                   <option value="proses">Proses</option>
                                   <option selected value="selesai">Selesai</option>
                               @endif
                           </select>
                       </div>
                   </div>
                   <div class="form-group">
                       <label for="tanggapan"><b style="font-family: Times New Roman">Tanggapan</b></label>
                       <textarea name="tanggapan" id="tanggapan" rows="4" class="form-control" placeholder="Belum ada tanggapan">{{ $tanggapan->tanggapan ?? '' }}</textarea>
                   </div>
                   <center><button type="submit" class="btn btn btn-info"  style="width: 25%">KIRIM</button></center>
               </form>
               @if (Session::has('status'))
                   <div class="alert alert-success mt-2">
                       {{ Session::get('status') }}
                   </div>
               @endif
              </div>
           </div>
        </div>
   </div>
@endsection