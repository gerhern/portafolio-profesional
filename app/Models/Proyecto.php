<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public $fillable = ['nombre',
        'descripcion',
        'descripcion_corta',
        'url_imagen',
    ];
}
