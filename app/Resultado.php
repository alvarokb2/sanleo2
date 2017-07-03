<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    //
    protected $fillable = ['observacion', 'seleccion'];

    public function alumno(){
        return $this->belongsTo('Sanleo\Alumno', 'id_alumno');
    }

    public function subarea(){
        return $this->belongsTo('Sanleo\Subarea', 'id_subarea');
    }
}
