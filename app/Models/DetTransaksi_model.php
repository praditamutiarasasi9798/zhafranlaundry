<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetTransaksi_model extends Model
{
    use HasFactory;
    protected $table = 'tb_det_transaksi'; 
    protected $fillable = [
        'id_det_transaksi',
        'kuantitas',
        'keterangan',
        'id_transaksi',
        'id_paket',

    ];
}
