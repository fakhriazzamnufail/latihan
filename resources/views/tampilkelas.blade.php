@extends('template')





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

@section('isi')
<div class="col-md-12">
        @if(session('Pesan'))
    {!! session('Pesan')!!}
    @endif
    <br>
        <a class="btn btn-sm btn-primary" href="/input/kelas">Input_Kelas</a><br>
        <a href="/home">Home</a><br><br>
        <table id="example1" class="table table-bordered table-striped">
            <tr>
                <td>NO</td>
                <td>ID KELAS</td>
                <td>NAMA KELAS</td>
                <td>AKSI</td>
            </tr>
            @foreach($kelas as $k)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->id_kelas }}</td>
                <td>{{ $k->nama_kelas }}</td>
                <td align="center">
                    <a class="btn btn-warning" href="/kelas/edit/{{$k->id_kelas}}"><i
                        class=" fa fa-edit"></i></a>
                    <a class="btn btn-danger" href="/kelas/hapus/{{$k->id_kelas}}"
                    onclick=" return confirm('Apakah Anda Yakin Menghapus Data?');"><i class="fa fa-trash"></i></a>
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
    <title>tampil_kelas</title>
</head>
<body>
    <h1 >Selamat Datang Di Halaman Kelas</h1><br><br><br><br>
    <a href="/input/kelas" >Input_Kelas</a><br>
    <a href="/home">Home</a><br><br>
    <table border = 1>
        <tr>
            <td>NO</td>
            <td>ID KELAS</td>
            <td>NAMA KELAS</td>
            <td>AKSI</td>
        </tr>
        @foreach($kelas as $k)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->id_kelas }}</td>
            <td>{{ $k->nama_kelas }}</td>
            <td>
                <a href="/kelas/edit/{{$k->id_kelas}}">Edit</a> |
                <a href="/kelas/hapus/{{$k->id_kelas}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html> -->