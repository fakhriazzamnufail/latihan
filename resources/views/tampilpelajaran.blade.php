@extends('template')



@section('judul')
<div class="col-sm-6">
    <h1 class="m-0">Mata Pelajaran</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Mata Pelajaran</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
</div><!-- /.col -->
@endsection

@section('isi')

<div class="col-md-12">
    
        @if(session('Pesan'))
        {!! session('Pesan')!!}
        @endif
        <br><br><br>

        <a class="btn btn-sm btn-primary" href="/input/pelajaran">Input_Pelajaran</a><br>
        <a href="/home">Home</a><br><br>
        <table id="example1" class="table table-bordered table-striped">
            <tr>
                <td>NO</td>
                <td>ID PELAJARAN</td>
                <td>NAMA PELAJARAN</td>
                <td>AKSI</td>
            </tr>
            @foreach($pelajaran as $mapel)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mapel->id_pelajaran }}</td>
                <td>{{ $mapel->nama_pelajaran }}</td>
                <td align="center">
                    <a class="btn btn-warning" href="/pelajaran/edit/{{$mapel->id_pelajaran}}"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger" href="/pelajaran/hapus/{{$mapel->id_pelajaran}}"
                        onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </table>
    </center>
</div>

@endsection



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Pelajaran</title>
</head>
<body align="center">
    <h1 >Selamat Datang Di Halaman Mata Pelajaran</h1><br><br><br><br>
    <a href="/input/pelajaran" >Input_Pelajaran</a><br>
    <a href="/home">Home</a><br><br>
    <table border = 1  align="center">
        <tr>
            <td>NO</td>
            <td>ID PELAJARAN</td>
            <td>NAMA PELAJARAN</td>
            <td>AKSI</td>
        </tr>
        @foreach($pelajaran as $mapel)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mapel->id_pelajaran }}</td>
            <td>{{ $mapel->nama_pelajaran }}</td>
            <td>
                <a href="/pelajaran/edit/{{$mapel->id_pelajaran}}">Edit</a> |
                <a href="/pelajaran/hapus/{{$mapel->id_pelajaran}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html> -->