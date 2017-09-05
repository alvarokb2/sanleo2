<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Sanleo\Informe;
use Sanleo\Resultado;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class ResultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $informe = Informe::first();

        $areas = $informe->areas()->get();
        $rol = Auth::user()->rol;
        if($rol == 'educadora' or $rol == 'admin'){
            return view('educadora.alumnos.informe.areas')->with('areas', $areas);
        }
        elseif($rol == 'apoderado'){
            return view('apoderado.alumnos.informe.areas')->with('areas', $areas);
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = session()->get('alumno');
        $subarea = session()->get('subarea');
        if($request->seleccion != null){
            if($request->observacion == null){
                $observacion = '';
            }
            else{
                $observacion = $request->observacion;
            }

            $resultado = Resultado::create([
                'seleccion' => $request->seleccion,
                'observacion' => $observacion,
            ]);

            $alumno->resultados()->save($resultado);
            $subarea->resultados()->save($resultado);
        }

        else{
          if($request->observacion != null){
              $seleccion= -1;
              $resultado = Resultado::create([
                  'seleccion' => $seleccion,
                  'observacion' => $request->observacion,
              ]);
              $alumno->resultados()->save($resultado);
              $subarea->resultados()->save($resultado);

              }
        }
        $area = $subarea->areas()->first()->id;
        return Redirect::route('area.show', $area);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if($request->seleccion != null){
            if($request->observacion == null){
                $observacion = '';
            }
            else{
                $observacion = $request->observacion;
            }

            $resultado = Resultado::find($id);
            $resultado->seleccion = $request->seleccion;
            $resultado->observacion = $request->observacion;
            $resultado->save();
          }
          else{
            if($request->observacion != null){
                $seleccion= -1;
                $resultado = Resultado::find($id);
                $resultado->seleccion = $request->seleccion;
                $resultado->observacion = $request->observacion;
                $resultado->save();
              }
            }

            $area = session()->get('subarea')->areas()->first()->id;
            return Redirect::route('area.show', $area);


        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
