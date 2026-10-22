@extends('template')




@section('judul')
<div class="col-sm-6">
    <h1 class="m-0">Edit Santri</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Santri</a></li>
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
        <form class="form-horizontal" method="post" action="{{url('/santri/update')}}">
            @csrf
            <input type="hidden" name="id_santri" value="{{$santri->id_santri}}">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama </label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_santri" value="{{$santri->nama_santri}}" required
                            placeholder="Nama Santri">
                    </div>
                    <input type="hidden" name="id_santri" value="{{$santri->id_santri}}">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin">
                        <option>Jenis Kelamin</option>
                        <option value="Laki-Laki" @if($santri->jenis_kelamin=='Laki-Laki') selected @endif>Laki-Laki
                        </option>
                        <option value="Perempuan" @if($santri->jenis_kelamin=='Perempuan') selected @endif>Perempuan
                        </option>
                    </select>
                    <br><br>
                    <input type="hidden" name="id_santri" value="{{$santri->id_santri}}">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="{{$santri->tanggal_lahir}}">
                    <br><br>

                </div><br><br>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat </label>
                    <div class="col-sm-10">
                        <input name="alamat_santri" required value="{{$santri->alamat_santri}}" placeholder="Alamat">
                    </div>
                </div><br><br>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No Hp </label>
                    <div class="col-sm-10">
                        <input name="telp_santri" required value="{{$santri->telp_santri}}" placeholder="Nomor Hp">
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
<!-- /.row -->
<!-- Main row -->

@endsection



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampil_santri</title>
</head>
<body>
    <h1>Edit Santri</h1><br><br><br><br>
    <a href="{{url('/santri')}}">Kembali</a><hr>
    <hr>
    <form method="post" action="{{url('/santri/update')}}">
        @csrf
        <input type="hidden" name="id_santri"  value="{{$santri->id_santri}}">
        <label>Nama  :</label> <br>
        <input type="text" name="nama_santri" value="{{$santri->nama_santri}}" required>
        <br><br>
        <label>Alamat  :</label> <br>
        <textarea name="alamat_santri" required>{{$santri->alamat_santri}}</textarea>
        <br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html> -->