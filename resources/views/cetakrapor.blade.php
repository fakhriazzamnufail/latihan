<h1 align="center">LAPORAN HASIL BELAJAR SANTRI</h1>
<h5 align="center">Pondok Pesantren Dar El-Ilmi</h5>
<hr>

<table  width="100%">
    <tr>
        <td>Nama Santri</td>
        <td align="left">:</td>
        <td>{{ $rapor->first()->nama_santri}}</td><br>  
        <td align="right">Jenis Kelamin</td>
        <td align="right">:</td>
        <TD align="right">{{$rapor->first()->jenis_kelamin}}</TD>
    </tr>

    <tr >
        <td >ID Santri</td>
        <td>:</td>
        <td>{{$rapor->first()->id_santri}}</td><br>

        <td align="right">No Telp</td>
        <td align="right">:</td>
        <td align="right">{{$rapor->first()->telp_santri}}</td>
    </tr>    

</table><br><br>


<table  width="100%" border="1" >
    <thead>
        <tr>
            <th>NO</th>
            <th>Mapel</th>
            <th>LAT.1</th>
            <th>LAT.2</th>
            <th>MID</th>
            <th>UAS</th>
            <th>RAPOR</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rapor as $n)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $n->nama_pelajaran}}</td>
            <td>{{ $n->nilai_latihan1 }}</td>
            <td>{{ $n->nilai_latihan2 }}</td>
            <td>{{ $n->nilai_mid }}</td>
            <td>{{ $n->nilai_uas }}</td>
            <td>{{ $n->nilai_rapor }}</td>
        </tr>
        @endforeach
    </tbody>
</table><br><br><br><br>

<div>
    <p style="text-align: right">Wali Santri</p><br>

    <p align="right"><strong>__________________________</strong></p>
</div>