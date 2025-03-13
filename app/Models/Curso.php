<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'caratula', 'contenido', 'kit_robotica'];

    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'curso_grupo');
    }
}
