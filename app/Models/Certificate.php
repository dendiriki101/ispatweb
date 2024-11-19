<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    // public function slugpost(){
    //     return $this->belongsTo(Slugpost::class,'slug_id');
    // }

    // public function getRouteKeyName()
    // {
    //     return 'file';
    // }

}
