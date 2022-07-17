<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;

    protected $table = 'tb_pickup';

    protected $fillable = [
        'pembayaran',
        'jenis_sampah',
        'berat_sampah',
        'alamat',
        'foto',
    ];
}
