<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SantriModel extends Model
{
    use HasFactory;

    protected $table = 'tb_santri';
    protected $primaryKey = 'id_santri';
    protected $fillable = ['nama_santri','alamat_santri'];

}
