<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $table = 'buyers'; // Nama tabel

    protected $fillable = [
        'nama',
        'alamat',
        'npwp',
        'nomor_telepon',
        'email',
        'status',
        'bank',
        'no_rek',
        'atas_nama'
    ];
}
