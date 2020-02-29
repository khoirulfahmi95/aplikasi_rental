<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    protected $table = 'mobil';
    protected $fillable = ['no_plat, jenis,merek, thn_buat, warna, keterangan'];

}
