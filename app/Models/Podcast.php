<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    //Relacion uno a muchos (inversa)
    public function estructuras()
    {
        return $this->belongsTo(Estructura::class, 'estructura_id');
    }

    //Relacion muchos a muchos
    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'podcast_curso');
    }

    public function expertos()
    {
        return $this->belongsToMany(Experto::class,'podcast_experto');
    }
}
