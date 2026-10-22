@extends('template')





@section('judul')
<div class="col-sm-6">
    <h1 class="m-0">Santri</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Santri</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
</div><!-- /.col -->
@endsection

<!-- /.content-header -->

<!-- Main content -->
@section('isi') 
<div class="col-md-12">
    <center>

        @if(session('Pesan'))
        {!! session('Pesan')!!}
        @endif

    </center>

    <a class="btn btn-sm btn-primary" href="/inputsantri">Input Santri</a>
    <br><br>
    <a href="/home">Home</a>
    <br><br>

    <!-- <table id="example2" class="table table-bordered table-hover"> -->
    <table id="example1" class="table table-bordered table-striped">
        @if(session('pesan'))
        {!! session('pesan')!!}
        @endif
        <thead>
            <tr>
                <td>NO</td>
                <td>ID SANTRI</td>
                <td>NAMA SANTRI</td>
                <td>JENIS KELAMIN</td>
                <td>TANGGAL LAHIR</td>
                <td>ALAMAT SANTRI</td>
                <td>TELEPON SANTRI</td>
                <td>AKSI</td>
            </tr>
        </thead>
        <tbody>
            @foreach($santri as $s)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->id_santri }}</td>
                <td>{{ $s->nama_santri }}</td>
                <td>{{ $s->jenis_kelamin}}</td>
                <td>{{ $s->tanggal_lahir}}</td>
                <td>{{ $s->alamat_santri }}</td>
                <td>{{ $s->telp_santri }}</td>
                <center>
                    <td align="center">
                        <a class="btn btn-warning" href="/santri/edit/{{$s->id_santri}}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="/santri/hapus/{{$s->id_santri}}"
                            onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><i class="fa fa-trash"></i></a>
                    </td>
                </center>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampil_santri</title>
</head>
<body align="center">
    <h1 >Selamat Datang Di Halaman Santri</h1><br><br><br><br>
    <a href="/inputsantri" >Input_Santri</a><br>
    <a href="/home">Home</a><br><br>
    <table align="center" border = 1>
        @if(session('pesan'))
            {!! session('pesan')!!}
        @endif
        <tr>
            <td>NO</td>
            <td>ID SANTRI</td>
            <td>NAMA SANTRI</td>
            <td>ALAMAT SANTRI</td>
            <td>AKSI</td>
        </tr>
        @foreach($santri as $s)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $s->id_santri }}</td>
            <td>{{ $s->nama_santri }}</td>
            <td>{{ $s->alamat_santri }}</td>
            <td>
                <a href="/santri/edit/{{$s->id_santri}}">Edit</a> |
                <a href="/santri/hapus/{{$s->id_santri}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html> -->








