@extends('template')
@section('isi')


@section('judul')
<div class="col-sm-6">
    <h1 class="m-0">Kelas</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Kelas</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
</div><!-- /.col -->
@endsection
<!-- /.content-header -->



@section('isi')
<div class="col-md-12">
    <!-- Small boxes (Stat box) -->


    

    <br>

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Input Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="{{url('/kelas/simpan')}}">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kelas </label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_kelas" required class="form-control" id="inputEmail3"
                            placeholder="Nama Kelas">
                    </div>
                </div><br><br>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Input</button>
                    <a href="{{url('/kelas')}}" class="btn btn-default float-right">Cancel</a>
                </div>
                <!-- /.card-footer -->
        </form>
    </div>

</div>



@endsection




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Kelas</title>
</head>
<body>
    <h1 >Selamat Datang Di Halaman Input Kelas</h1><br><br>
    @if(session('Pesan'))
        {!! session('Pesan')!!}
    @endif 
    <br>
    <a href="{{url('/kelas')}}">Kembali</a><hr>

    <form method="post" action="{{url('/kelas/simpan')}}">
        @csrf
        <label>Nama  :</label> <br>
        <input type="text" name="nama_kelas" required><br><br>
        <button type="submit">Simpan</button>
    </form>
            <form method="post" action="{{url('/kelas/simpan')}}">
            @csrf
            <label class="col-sm-2 col-form-label">Nama :</label>
            <input type="text" name="nama_kelas" required class="form-control" id="inputEmail3"
                placeholder="Email"><br><br>
            <button type="submit" class="btn btn btn-outline-primary">Simpan</button>
        </form>
</body>
</html> -->