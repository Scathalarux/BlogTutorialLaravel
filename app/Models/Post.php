<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Por convención, si no indicamos la tabla, interpreta que es la tabla con mismo nombre (minúsculas)
     * y en plural: posts
     * IMPORTANTE: el idioma usado para la convención es el INGLÉS
     * Modelo en singular; tablas en plural
     */
    
    // Tabla con la que se va a conectar
    protected $table = 'posts';
}
