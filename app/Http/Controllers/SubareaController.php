<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Sanleo\Subarea;
use Illuminate\Support\Facades\Redirect;
use Sanleo\Indicador;
use Illuminate\Support\Facades\Auth;

class SubareaController extends Controller
{
    public function __construct()
    {
        $this->middleware('interno');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.informes.areas.subareas.create');
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
        $area = session()->get('area');
        $subarea = Subarea::create([
            'name' => $request->name
        ]);
        $area->subareas()->save($subarea);
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
        $subarea = Subarea::find($id);
        session()->put('subarea', $subarea);
        $indicadores = $subarea->indicadores()->get();
        if(Auth::user()->rol == 'educadora'){
            return view('educadora.alumnos.informe.indicadores')->with('indicadores', $indicadores);
        }

        return view('admin.informes.areas.subareas.indicadores.indicadores')->with('indicadores', $indicadores);
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
        $subarea = Subarea::find($id);
        $subarea->delete();
        return Redirect::back();
    }
}
