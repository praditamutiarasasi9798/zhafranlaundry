<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbhTransaksi_model extends Model
{
    use HasFactory;
    protected $table = 'transaksi'; 
    protected $fillable = [
        'id_transaksi',
        'kode_invoice',
        'tanggal_transaksi',
        'batas_waktu',
        'tanggal_bayar',
        'biaya_tambahan',
        'status_transaksi',
        'status_bayar',
        'nama_customer',
           

    ];
}
