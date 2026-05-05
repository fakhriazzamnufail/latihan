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
    <!-- Small boxes (Stat box) -->

<div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Input Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="{{url('/kelas/update')}}">
            @csrf
            <input type="hidden" name="id_kelas" value="{{$kelas->id_kelas}}">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama </label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_kelas" value="{{$kelas->nama_kelas}}" required>
                    </div>
                </div><br><br>

                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Edit</button>
                    <a href="{{url('/kelas')}}" class="btn btn-default float-right">Cancel</a>
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
    <h1 >Halaman Edit Kelas</h1><br><br>
    <a href="{{url('/kelas')}}">Kembali</a><hr>
    <form method="post" action="{{url('/kelas/update')}}">
        @csrf
        <input type="hidden" name="id_kelas" value="{{$kelas->id_kelas}}">
        <label>Nama  :</label> <br>
        <input type="text" name="nama_kelas" value="{{$kelas->nama_kelas}}" required><br><br>
        <button type="submit">Update</button>
    </form>
</div>
@endsection -->