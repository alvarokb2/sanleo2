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

    protected $fillable = [
        'name'
    ];
}

