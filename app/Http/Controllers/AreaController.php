<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Sanleo\Informe;
use Sanleo\Area;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AreaController extends Controller
{

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rol = Auth::user()->rol;
        $areas = [];
        if (session()->has('informe')){
            $informe = session()->get('informe');
            $areas = $informe->areas()->orderBy('id', 'ASC')->get();
        }

        if($rol == 'apoderado'){
            return view('apoderado.alumnos.informe.areas')->with('areas', $areas);

        }
        elseif($rol == 'admin'){
            return view('admin.informes.areas.areas')->with('areas', $areas);

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
        return view('admin.informes.areas.create');
    }

    /**
     * Store a newly created resource in storage.
                                                                                                                                                                                                                                                                                                                                     *
                                                                                                                                                                                                                                                                                                                                     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $informe = session()->get('informe');
        $area = Area::create([
            'name' => $request->name
        ]);
        $informe->areas()->save($area);
        return Redirect::route('informe.show', $informe->id);
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
        $rol = Auth::user()->rol;
        $area = Area::find($id);
        session()->put('area', $area);
        $subareas = $area->subareas()->get();

        if($rol == 'educadora' or $rol == 'admin'){
            if(session()->has('alumno')){
                return view('educadora.alumnos.informe.subarea')->with('subareas', $subareas);
            }
            return view('admin.informes.areas.subareas.subareas')->with('subareas', $subareas);
        }



        elseif($rol == 'apoderado'){
            return view('apoderado.alumnos.informe.subareas')->with('subareas', $subareas);
        }

        return view('admin.informes.areas.subareas.subareas')->with('subareas', $subareas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $area = Area::find($id);
      return view('admin.informes.areas.edit')->with('area', $area);
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
      $informe= session()->get('informe');
      $area = Area::findOrFail($id);
      $area->name = $request->name;
      $area->save();
      return Redirect::route('informe.show',$informe);
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
        $area = Area::find($id);
        $area->delete();
        return Redirect::back();
    }
}
