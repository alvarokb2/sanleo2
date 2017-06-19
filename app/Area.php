<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    public function informe(){
        return $this->belongsTo('Sanleo\Informe', 'id_informe');
    }

    public function subareas(){
        return $this->hasMany('Sanleo\Subarea', 'id_area');
    }
    
    protected $fillable = [
        'name'
    ];
}
