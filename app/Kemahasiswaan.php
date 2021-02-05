<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kemahasiswaan extends Model
{
    protected $fillable = [
        'image', 'tanggal', 'isi',
    ];
}
