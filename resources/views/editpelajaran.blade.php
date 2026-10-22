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
    <!-- Small boxes (Stat box) -->

<div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Input Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="{{url('/pelajaran/update')}}">
            @csrf
            <input type="hidden" name="id_pelajaran" value="{{$pelajaran->id_pelajaran}}">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama </label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_pelajaran" value="{{$pelajaran->nama_pelajaran}}" required>
                    </div>
                </div><br><br>

                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Edit</button>
                    <a href="{{url('/pelajaran')}}" class="btn btn-default float-right">Cancel</a>
                </div>
                <!-- /.card-footer -->
        </form>
    </div>
</div>
<!-- /.row -->
<!-- Main row -->

@endsection

<!-- @section('isi')

<div class="col-md-12">
    <h1>Halaman Edit Pelajaran</h1><br><br>
    <a href="{{url('/pelajaran')}}">Kembali</a>
    <hr>
    <form method="post" action="{{url('/pelajaran/update')}}">
        @csrf
        <input type="hidden" name="id_pelajaran" value="{{$pelajaran->id_pelajaran}}">
        <label>Nama :</label> <br>
        <input type="text" name="nama_pelajaran" value="{{$pelajaran->nama_pelajaran}}" required><br><br>
        <button type="submit">Update</button>
    </form>
</div>
@endsection -->