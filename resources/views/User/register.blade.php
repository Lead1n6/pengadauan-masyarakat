@extends('layouts.user')

@section('css')
<style>
    body {
        background: #556ec6;
    }

    .btn-purple {
        background: #278a35;
        width: 100%;
        color: rgb(255, 255, 255);
    }

</style>
@endsection

@section('title', 'Halaman Daftar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="item" style="padding-top: 90px;">
                <div class="text-center">
                    <img src="assets/images/logos.png" alt="pink" style="border-radius: 55%;" width="130px" >
                </div>
              </div>
            <h2 class="text-center text-white mb-0 mt-6 pt-1" style="font-family:Times New Roman"><b>SUARKAT</b></h2>
            <P class="text-center text-white mb-6">Suara Masyarakat</P>
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-5" style="font-family:Times New Roman">FORM DAFTAR</h2>
                    <form action="{{ route('pekat.register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="number" name="nik" placeholder="NIK" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number" name="telp" placeholder="No. Telp" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-purple">REGISTER</button>
                    </form>
                </div>
            </div>
            @if (Session::has('pesan'))
            <div class="alert alert-danger mt-2">
                {{ Session::get('pesan') }}
            </div>
            @endif
            <a href="{{ route('pekat.index') }}" class="btn btn-warning text-white mt-3" style="width: 100%">Kembali ke Halaman Utama</a>
        </div>
    </div>
</div>
@endsection
