<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillable = ['nama_karyawan', 'alamat', 'no_tlp', 'tgl_masuk_kerja', 'bagian', 'keterangan'];
}
