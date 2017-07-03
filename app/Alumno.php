<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;
use Sanleo\Curso;
use Sanleo\Resultado;

class Alumno extends Model
{
    //
    public function curso(){
        return $this->belongsTo('Sanleo\Curso', 'id_curso');
    }

    public function resultados(){
        return $this->hasMany('Sanleo\Resultado', 'id_alumno');
    }

    protected $fillable = ['name', 'edad', 'fecha_nacimiento'];

    public function hasResult($subarea){
        if($this->resultados()->first() != null){
            if($this->resultados()->where('id_subarea', $subarea->id)->where('id_alumno', $this->id)->first() != null){
                return true;
            }
        }
        return false;
    }

    public function getResult($subarea){
        if($this->resultados()->first() != null and $this->hasResult($subarea)){
            return $this->resultados()->where('id_subarea', $subarea->id)->where('id_alumno', $this->id)->first();
        }
    }

}
