<?php

namespace Sanleo;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function cursos(){
        return $this->belongsToMany('Sanleo\Curso', 'cursos_users', 'id_user', 'id_curso');
    }

    public function alumnos(){
        return $this->hasMany('Sanleo\Alumno', 'id_apoderado');
    }

    public function jefatura_curso(){
        return $this->belongsTo('Sanleo\Curso', 'id_profejefe');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'rol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
