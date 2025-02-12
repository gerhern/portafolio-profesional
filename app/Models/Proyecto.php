<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Proyecto extends Model
{
    use SoftDeletes;

    public $fillable = ['nombre',
        'descripcion',
        'descripcion_corta',
        'url_imagen',
    ];

    protected function fullUrlImagen() : Attribute{
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => Storage::disk('proyecto')->url($attributes['url_imagen']),
        );
    }
}
