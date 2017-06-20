<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    //
    public function subarea(){
        return $this->belongsTo('Sanleo\Subarea', 'id_subarea');
    }

    protected $fillable = [
        'name'
    ];
}
