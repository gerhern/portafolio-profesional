<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecnologia extends Model
{
    public function proyecto() {
        return $this->belongsToMany(Proyecto::class);
    }
}
