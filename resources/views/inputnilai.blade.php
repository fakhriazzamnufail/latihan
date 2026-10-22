@extends('template')


@section('judul')

<div class="col-sm-6">
    <h1 class="m-0">Input Nilai</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Input</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
</div><!-- /.col -->
@endsection


@section('isi')
<div class="col-md-12">
    <center>

        @if(session('Pesan'))
        {!! session('Pesan')!!}
        @endif

    </center>

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Input Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="{{url('/nilai/simpan')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Santri </label>
                    <div class="col-sm-10">
                        <select name="id_santri" required class="form-control" id="">
                            <option value="">- Pilih Santri -</option>
                            @foreach($santri as $s)
                            <option value="{{$s->id_santri}}">{{$s->nama_santri}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Pengajar </label>
                    <div class="col-sm-10">
                        <select name="id_pengajar" required class="form-control" id="">
                            <option value="">- Pilih Pengajar -</option>
                            @foreach($pengajar as $p)
                            <option value="{{$p->id_pengajar}}">{{$p->nama_pengajar}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Kelas </label>
                    <div class="col-sm-10">
                        <select name="id_kelas" required class="form-control" id="">
                            <option value="">- Pilih Kelas -</option>
                            @foreach($kelas as $k)
                            <option value="{{$k->id_kelas}}">{{$k->nama_kelas}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Pelajaran </label>
                    <div class="col-sm-10">
                        <select name="id_pelajaran" required class="form-control" id="" placeholder="Nama Santri">
                            <option value="">- Pilih Pelajaran -</option>
                            @foreach($mapel as $m)
                            <option value="{{$m->id_pelajaran}}">{{$m->nama_pelajaran}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Latihan 1</label>
                    <div class="col-sm-11">
                        <input type="text" name="nilai_latihan1" required class="form-control" id=""
                            placeholder="Masukkan Nilai">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Latihan 2</label>
                    <div class="col-sm-11">
                        <input type="text" name="nilai_latihan2" required class="form-control" id=""
                            placeholder="Masukkan Nilai">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">MID </label>
                    <div class="col-sm-11">
                        <input type="text" name="nilai_mid" required class="form-control" id=""
                            placeholder="Masukkan Nilai">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">UAS </label>
                    <div class="col-sm-11">
                        <input type="text" name="nilai_uas" required class="form-control" id=""
                            placeholder="Masukkan Nilai">
                    </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Input</button>
                    <a href="{{url('/nilai')}}" class="btn btn-default float-right">Cancel</a>
                </div>
                <!-- /.card-footer -->

        </form>
    </div>
</div>
@endsection