@extends('template')




@section('judul')


<div class="col-sm-6">
    <h1 class="m-0">Edit Pengajar</h1>
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
    <!-- Small boxes (Stat box) -->

<div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Input Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="{{url('/pengajar/update')}}">
            @csrf
            <input type="hidden" name="id_pengajar"  value="{{$pengajar->id_pengajar}}">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama </label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_pengajar" value="{{$pengajar->nama_pengajar}}" required>
                    </div>
                </div><br><br>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat </label>
                    <div class="col-sm-10">
                        <input name="alamat_pengajar" required value="{{$pengajar->alamat_pengajar}}" placeholder="Alamat">
                    </div>
                </div><br><br>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Edit</button>
                    <a href="{{url('/pengajar')}}" class="btn btn-default float-right">Cancel</a>
                </div>
                <!-- /.card-footer -->
        </form>
    </div>
</div>
<!-- /.row -->
<!-- Main row -->
@endsection



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit_pengajar</title>
</head>
<body>
    <h1>Edit Pengajar</h1><br><br><br><br>
    <a href="{{url('/pengajar')}}">Kembali</a><hr>
    <hr>
    <form method="post" action="{{url('/pengajar/update')}}">
        @csrf
        <input type="hidden" name="id_pengajar"  value="{{$pengajar->id_pengajar}}">
        <label>Nama  :</label> <br>
        <input type="text" name="nama_pengajar" value="{{$pengajar->nama_pengajar}}" required>
        <br><br>
        <label>Alamat  :</label> <br>
        <textarea name="alamat_pengajar" required>{{$pengajar->alamat_pengajar}}</textarea>
        <br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html> -->