@extends('template')





@section('judul')
<div class="col-sm-6">
    <h1 class="m-0">Rapor</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Rapor</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
</div><!-- /.col -->
@endsection

<!-- /.content-header -->

<!-- Main content -->
@section('isi') 
<div class="col-md-12">


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
                <td>AKSI</td>
            </tr>
        </thead>
        <tbody>
            @foreach($rapor as $s)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->id_santri }}</td>
                <td>{{ $s->nama_santri }}</td>
                <td align="center">
                    <a class="btn btn-sm btn-warning" target="_blank" href="/rapor/cetak/{{ $s->id_santri }}"><i class="nav-icon fas fa-print"></i> Cetak Rapor</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection




