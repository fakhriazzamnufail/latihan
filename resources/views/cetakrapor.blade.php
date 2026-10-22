
<!-- HEADER -->
<div class="judul">
<h2>RAPOR SANTRI</h2>
<p>PONDOK PESANTREN</p>
<p>Tahun Ajaran 2025 / 2026</p>
</div>

<!-- BIODATA -->
<table class="biodata">

<tr>
<td width="20%">Nama</td>
<td width="2%">:</td>
<td width="35%">{{ $santri->nama_santri }}</td>

<td width="20%">Jenis Kelamin</td>
<td width="2%">:</td>
<td>{{ $santri->jenis_kelamin }}</td>
</tr>

<tr>
<td>Tanggal Lahir</td>
<td>:</td>
<td>{{ $santri->tanggal_lahir }}</td>

<td>Nomor Telp</td>
<td>:</td>
<td>{{ $santri->no_telp }}</td>
</tr>

<tr>
<td>Alamat</td>
<td>:</td>
<td colspan="4">{{ $santri->alamat_santri }}</td>
</tr>

</table>

<!-- TABEL NILAI -->
<table class="nilai">

<thead>
<tr>
<th width="8%">NO</th>
<th>Mata Pelajaran</th>
<th width="15%">KKM</th>
<th width="20%">Nilai Angka</th>
</tr>
</thead>

<tbody>

@foreach($nilai as $n)
<tr>

<td>{{ $loop->iteration }}</td>

<td style="text-align:left;">
{{ $n->nama_pelajaran }}
</td>

<td>80</td>

<td>
{{ $n->nilai_uas }}
</td>

</tr>
@endforeach

</tbody>

</table>

<!-- TANDA TANGAN -->
<table class="ttd">

<tr>

<td>
Orang Tua / Wali
<br><br><br><br>

<span class="garis"></span>
</td>

<td>
Payakumbuh, {{ date('d F Y') }}
<br>
Wali Kelas
<br><br><br><br>

<span class="garis"></span>
</td>

</tr>

</table>

</body>
</html>

CetakRapor.blade.php
