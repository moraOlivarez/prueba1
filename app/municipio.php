<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
    protected $table ="municipio";
    protected $fillable = [
        'nombre_municipio'
    ];
}
