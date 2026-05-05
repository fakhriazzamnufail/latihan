@extends('template')


@section('judul')


<div class="col-sm-6">
    <h1 class="m-0">Pengajar</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Pengajar</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
</div><!-- /.col -->
@endsection


<!-- /.content-header -->

<!-- Main content -->
@section('isi')


<div class="col-md-12">

    <a class="btn btn-sm btn-primary" href="/inputpengajar">Input_Pengajar</a><br><br>
    <a href="/home">Home</a><br><br>
    <table id="example1" class="table table-bordered table-striped">
        <tr>
            <td>NO</td>
            <td>ID PENGAJAR</td>
            <td>NAMA PENGAJAR</td>
            <td>ALAMAT PENGAJAR</td>
            <td>AKSI</td>
        </tr>
        @foreach($pengajar as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->id_pengajar}}</td>
            <td>{{ $p->nama_pengajar}}</td>
            <td>{{ $p->alamat_pengajar}}</td>

            <td align="center">
                <a class="btn btn-warning" href="/pengajar/edit/{{$p->id_pengajar}}""><i
                        class="fa fa-edit"></i></a>
                <a class="btn btn-danger" href="/pengajar/hapus/{{$p->id_pengajar}}""
                    onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </table>

</div>
@endsection

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body align="center" >
    <h1 >Selamat Datang</h1><br><br>
    <a href="actionlogout">log out</a>
    <hr><br>
    <h4>Menu Pilihan</h4>
    <tr align="center">
        <a href="/pengajar">Pengajar</a><br><br>
        <a href="/santri">Santri</a><br><br>
        <a href="/kelas">Kelas</a><br><br>
        <a href="/pelajaran">Mata Pelajaran</a>
    </tr>
</body>
</html> -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pengajar</title>
</head>
<body align="center">
    <h1>Selamat Datang Di Halaman Pengajar</h1>
    <a href="/inputpengajar">Input_Pengajar</a><br><br>
    <a href="/home">Home</a><br><br>
    <table align="center" border="1">
        <tr>
            <td>NO</td>
            <td>ID PENGAJAR</td>
            <td>NAMA PENGAJAR</td>
            <td>ALAMAT PENGAJAR</td>
            <td>AKSI</td>
        </tr>
        @foreach($pengajar as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->id_pengajar}}</td>
            <td>{{ $p->nama_pengajar}}</td>
            <td>{{ $p->alamat_pengajar}}</td>
            <td>
                <a href="/pengajar/edit/{{$p->id_pengajar}}">Edit</a> |
                <a href="/pengajar/hapus/{{$p->id_pengajar}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html> -->