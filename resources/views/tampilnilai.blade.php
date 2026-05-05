@extends('template')



@section('judul')
<div class="col-sm-6">
    <h1 class="m-0">Nilai</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
</div><!-- /.col -->
@endsection




@section('isi')
<div class="col-md-12">

    <a class="btn btn-sm btn-primary" href="/inputnilai">Input Nilai</a>

    <a class="btn btn-sm btn-warning" target="_blank" href="/nilai/cetak"><i class="nav-icon fas fa-print"></i> Cetak Nilai</a>
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

                <td>SANTRI</td>
                <td>PENGAJAR</td>
                <td>KELAS</td>
                <td>PELAJARAN</td>
                <td>LAT.1</td>
                <td>LAT.2</td>
                <td>MID</td>
                <td>UAS</td>
                <td>RAPOR</td>
                <td>AKSI</td>

            </tr>
        </thead>
        <tbody>
            @foreach($nilai as $n)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$n->nama_santri}}</td>
                <td>{{$n->nama_pengajar}}</td>
                <td>{{$n->nama_kelas}}</td>
                <td>{{$n->nama_pelajaran}}</td>
                <td>{{$n->nilai_latihan1}}</td>
                <td>{{$n->nilai_latihan2}}</td>
                <td>{{$n->nilai_mid}}</td>
                <td>{{$n->nilai_uas}}</td>
                <td>{{$n->nilai_rapor}}</td>
                <td>
                    <a href="/nilai/edit/{{$n->id_nilai}}" class="btn btn-xs btn-success"><i class="fas fa-edit"></i></a>
                    <a href="/nilai/hapus" class="btn btn-xs btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
   
        </tbody>
    </table>
</div>
@endsection
