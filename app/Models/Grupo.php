<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function estudiantes()
    {
        return $this->hasMany(User::class);
    }

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'curso_grupo');
    }
}
