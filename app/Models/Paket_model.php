<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket_model extends Model
{
    use HasFactory;
    protected $table = 'tb_paket'; 
    protected $fillable = [
        'id_paket',
        'nama_paket',
        'harga_paket',
        'jenis_paket',
        

    ];
}
