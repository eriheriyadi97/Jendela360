<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = "pembeli";

    protected $fillable = [
        'nama_pembeli',
        'mobil_dibeli',
        'email'
    ];
}
