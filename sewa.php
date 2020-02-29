<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sewa extends Model
{
    protected $table = 'sewa';
    protected $fillable = ['nik', 'nama','alamat', 'alamat_domisili', 'no_tlp','pekerjaan','pilihan_mobil','dari_tanggal','sampai_tanggal','status'];
//     protected $hidden = ['created_at','updated_at'];
}