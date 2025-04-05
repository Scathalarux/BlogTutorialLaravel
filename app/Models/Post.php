<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use PhpParser\Node\Expr\Cast\Array_;

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


    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Mutador que recoge el valor de title y lo transforma a minúsculas
     * Accesor que recoge el valor de la BD y lo muestra de la forma que se le indique justo cuando
     * se accede a él
     */
    protected function title(): Attribute
    {
        return Attribute::make(
            //mutador
            set: function($value)
            {
                return mb_strtolower($value);
            },
            //accesor
            get: function($value)
            {
                return ucfirst($value);
            }
        );
    }
}
