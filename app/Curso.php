<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;
use Sanleo\User;
use Sanleo\Alumno;

class Curso extends Model
{
    //
    public function users(){
        return $this->belongsToMany('Sanleo\User', 'cursos_users', 'id_curso', 'id_user');
    }

    public function alumnos(){
        return $this->hasMany('Sanleo\Alumno', 'id_curso');
    }

    public function profejefe(){
        return $this->hasOne('Sanleo\User', 'id_profejefe');
    }
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'id_profejefe',
    ];


}
