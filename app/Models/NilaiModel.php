<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiModel extends Model
{
    use HasFactory;

    protected $table = 'tb_nilai';
    protected $primaryKey = 'id_nilai';
    protected $fillable = ['id_santri', 'id_pengajar', 'id_kelas', 'id_pelajaran', 'nilai_latihan1', 'nilai_latihan2', 'nilai_mid', 'nilai_uas', 'nilai_rapor'];
}
