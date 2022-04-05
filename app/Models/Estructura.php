<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estructura extends Model
{
    use HasFactory;
    //Relacion uno a muchos
    public function podcasts()
    {
        return $this->hasMany(Podcast::class, 'id');
    }
}
