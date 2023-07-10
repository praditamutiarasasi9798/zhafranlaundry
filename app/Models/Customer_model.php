<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_model extends Model
{
    use HasFactory;
    protected $table = 'tb_customer'; 
    protected $fillable = [
        'id_customer',
        'nama_customer',
        'telepon',
        'jk',
        'alamat',

    ];
}
