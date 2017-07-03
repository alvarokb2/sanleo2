<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;
use Sanleo\Area;

class Subarea extends Model
{
    //
    public function areas(){
        return $this->belongsTo('Sanleo\Area', 'id_area');
    }

    public function indicadores()
    {
        return $this->hasMany('Sanleo\Indicador', 'id_subarea');
    }

    public function resultados(){
        return $this->hasMany('Sanleo\Resultado', 'id_subarea');
    }
    
    protected $fillable = [
        'name'
    ];
}

