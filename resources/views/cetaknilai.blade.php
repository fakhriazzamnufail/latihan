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
                <td>MID semesteer</td>
                <td>UAS</td>
                <td>RAPOR</td>

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
            </tr>
            @endforeach

        </tbody>
    </table>