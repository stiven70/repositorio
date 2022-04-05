<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experto extends Model
{
    use HasFactory;
    //Relacion muchos a muchos
    public function podcast()
    {
        return $this->belongsToMany(Podcast::class, 'podcast_experto');
    }
}
