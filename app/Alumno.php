<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;
use Sanleo\Curso;

class Alumno extends Model
{
    //
    public function curso(){
        return $this->belongsTo('Sanleo\Curso', 'id_curso');
    }

    protected $fillable = ['name', 'edad', 'fecha_nacimiento'];
}
