<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $fillable = ['nama_customer, nama_karyawan,nama_mobil, tgl_sewa, tgl_kembali, status, total_bayar'];

}
