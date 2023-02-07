<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link href="assets/images/lgo.png" rel='shortcut icon'>
        

        <style>
            body {
                background: #5978eb;
            }
        
            .btn-purple {
                background: #41bd58;
                width: 100%;
                color: rgb(247, 247, 247);
            }
        
        </style>
    <title>Petugas</title>
</head>
<body>

      

    <div class="container">
       
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="item" style="padding-top: 100px;">
                    <div class="text-center">
                        <img src="assets/images/admin.png" alt="pink" style="border-radius: 50%;" width="120px" >
                    </div>
                  </div>
                  <h2 class="text-center text-white pt-1">SUARKAT</h2>
                 <P class="text-center text-white">Suara Masyarakat</P>
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="text-center mb-5" style="font-family: Times New Roman">FORM PETUGAS</h2>
                        <form action="{{ route('admin.login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-purple">MASUK</button>
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

</body>
</html>