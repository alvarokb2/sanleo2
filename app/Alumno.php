<?php

namespace Sanleo;

use Illuminate\Database\Eloquent\Model;
use Sanleo\Curso;
use Sanleo\Resultado;
use Sanleo\Informe;

class Alumno extends Model
{
    //
    public function curso(){
        return $this->belongsTo('Sanleo\Curso', 'id_curso');
    }

    public function resultados(){
        return $this->hasMany('Sanleo\Resultado', 'id_alumno');
    }

    public function apoderado(){
        return $this->belongsTo('Sanleo\User', 'id_apoderado');
    }
    
    protected $fillable = ['name', 'fecha_nacimiento'];

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

    public static function completo(){
        $informe = Informe::where('activo', 'true')->first();
        $areas = $informe->areas()->get();
        $contador = 0;
        foreach($areas as $area) {
            $subareas = $area->subareas()->get();
            foreach($subareas as $subarea){
                $indicadores = $subarea->indicadores()->get();
                foreach($indicadores as $indicador){
                    $contador +=1;
                }
            }
        }

        //

        return $contador;
    }

    public function hasApoderado(){
        $response = false;
        if($this->apoderado()->first() != null){
            $response = true;
        }
        return $response;
    }


}
