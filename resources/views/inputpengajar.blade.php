@extends('template')



@section('judul')


<div class="col-sm-6">
    <h1 class="m-0">Input Pengajar</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Pengajar</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
</div><!-- /.col -->
@endsection

@section('isi')
<!-- Main content -->
<div class="col-md-12">


    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Input Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="{{url('/pengajar/simpan')}}">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama </label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_pengajar" required class="form-control" id="inputEmail3"
                            placeholder="Nama Pengajar">
                    </div>
                </div><br><br>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat </label>
                    <div class="col-sm-10">
                        <input name="alamat_pengajar" required type="text" name="nama_kelas" required class="form-control"
                            id="inputEmail3" placeholder="Alamat">
                    </div>
                </div><br><br>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Input</button>
                    <a href="{{url('/pengajar')}}" class="btn btn-default float-right">Cancel</a>
                </div>
                <!-- /.card-footer -->
        </form>
    </div>
</div>

@endsection

</body>

</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Pengajar</title>
</head>
<body>
    <h1 align = "center">Selamat Datang Di Halaman Login</h1>
     @if(session('Pesan'))
        {!! session('Pesan')!!}
     @endif <br>
    <a href="{{url('/pengajar')}}">Kembali</a><hr>
    <form method="post" action="{{url('/pengajar/simpan')}}">
        @csrf
        <label >Nama          :</label><br>
        <input type="text"name="nama_pengajar" required><br><br>
        <label >Alamat      :</label><br>
        <textarea name="alamat_pengajar" required></textarea><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html> -->