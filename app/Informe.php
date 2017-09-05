<?php
namespace Sanleo;

use Illuminate\Database\Eloquent\Model;
use Sanleo\Area;

class Informe extends Model
{
    //
    public function areas(){
        return $this->hasMany('Sanleo\Area', 'id_informe');
    }

    protected $fillable = [
        'year', 'periodo'
    ];

}
