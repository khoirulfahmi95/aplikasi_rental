<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class harga_sewa extends Model
{
    protected $table = 'harga_sewa';
    protected $fillable = ['plat_no', 'merek', 'jenis', 'warna', 'harga', 'keterangan'];
}
