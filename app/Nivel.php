<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table='niveles';
    public function cursos(){

        return $this->hasMany(Curso::class);
    }
}
