<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Certificacion extends Model
{
    use softDeletes;
    public $table = 'certificaciones';
    protected $fillable = ['nombre', 'institucion', 'fecha_emision', 'url_imagen'];

    protected function fullUrlImagen(): Attribute{
        return Attribute::make(
            get: fn(mixed $value, array $attributes) => Storage::disk('certificaciones')->url($attributes['url_imagen']),
        );
    }
    //
}
