<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelelang extends Model
{
    use HasFactory;

    protected $table = 'pelelang'; // Nama tabel

    protected $fillable = [
        'no_lelang',
        'id_buyer',
        'penawaran',
        'status',
        'type'
    ];

    // Mendefinisikan relasi dengan model Lelang
    public function lelang()
    {
        return $this->belongsTo(Lelang::class, 'no_lelang', 'id');
    }

    // Mendefinisikan relasi dengan model Buyer
    public function buyer()
    {
        return $this->belongsTo(Buyer::class, 'id_buyer', 'id');
    }
}
