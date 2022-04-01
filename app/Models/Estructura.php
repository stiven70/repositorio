<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estructura extends Model
{
    use HasFactory;
    //Relacion uno a muchos
    public function podcast()
    {
        return $this->hasMany('App\Models\Podcast');
    }
}
