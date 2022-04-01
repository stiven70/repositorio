<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    //Relacion uno a muchos (inversa)
    public function audio()
    {
        return $this->belongsTo('App\Models\Estructura');
    }

    //Relacion muchos a muchos
    public function cursos()
    {
        return $this->belongsToMany('App\Models\Curso');
    }

    public function expertos()
    {
        return $this->belongsToMany('App\Models\Experto');
    }
}
