<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    protected $table = 'lelang'; // Nama tabel yang benar
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'id';  // Misalnya, jika Anda ingin menggunakan 'slug' sebagai parameter dinamis
    }

    use HasFactory;
}
