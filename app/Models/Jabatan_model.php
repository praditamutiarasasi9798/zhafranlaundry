<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan_model extends Model
{
    use HasFactory;
    protected $table = 'tb_jabatan'; 
    protected $fillable = [
        'id_jabatan',
        'nama_pengguna',
        'telepon',
        'nama_jabatan',

    ];
}
