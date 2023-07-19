<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran_model extends Model
{
    use HasFactory;
    protected $table = 'tb_pembayaran'; 
    protected $fillable = [
        'id_pembayaran',
        'id_transaksi',
        'total_harga',
        'uang_yg_dibayar',
        'kembalian',


    ];
}
