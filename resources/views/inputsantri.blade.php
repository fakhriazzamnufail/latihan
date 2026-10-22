@extends('template')


@section('judul')

<div class="col-sm-6">
    <h1 class="m-0">Input Santri</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Input</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
</div><!-- /.col -->
@endsection


@section('isi')
<div class="col-md-12">


    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Input Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="{{url('/santri/simpan')}}">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama </label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_santri" required class="form-control" id="inputEmail3"
                            placeholder="Nama Santri">
                    </div>
                </div><br><br>
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" required>
                    <option>Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <br><br>
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" required>
                <br><br>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat </label>
                    <div class="col-sm-10">
                        <input name="alamat_santri" required type="text" name="nama_kelas" required class="form-control"
                            id="inputEmail3" placeholder="Alamat">
                    </div>
                </div><br><br>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No Hp </label>
                    <div class="col-sm-10">
                        <input name="telp_santri" required type="text" name="telp_santri" required class="form-control"
                            id="inputEmail3" placeholder="Alamat">
                    </div>
                </div><br><br>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Input</button>
                    <a href="{{url('/santri')}}" class="btn btn-default float-right">Cancel</a>
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
    <title>Input Santri</title>
</head>
<body>
    <h1 >Selamat Datang Di Halaman Login</h1><br><br>
        @if(session('Pesan'))
            {!! session('Pesan')!!}
        @endif 
    <a href="{{url('/santri')}}">Kembali</a><hr>
    <form method="post" action="{{url('/santri/simpan')}}">
        
        @csrf
        <label>Nama  :</label> <br>
        <input type="text" name="nama_santri" required><br><br>
        <label>Alamat  :</label> <br>
        <textarea name="alamat_santri" required></textarea><hr>
        <button type="submit">Simpan</button>
    </form>
</body>
</html> -->