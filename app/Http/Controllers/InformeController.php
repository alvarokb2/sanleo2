<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Sanleo\Area;
use Sanleo\Informe;
use Sanleo\Indicador;
use Sanleo\Subarea;

class InformeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $informes = Informe::all()->sortByDesc('activo');
        if (session()->has('alumno')) {
            session()->forget('alumno');
        }
        return view('admin.informes.informes')->with('informes', $informes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.informes.create');
    }

    public function activar_informe($id){
        $informe = Informe::find($id);

        $informes = Informe::all();

        foreach($informes as $inf){
            $inf->activo = false;
            $inf->save();
        }
        $informe->activo = true;
        $informe->save();
        return Redirect::route('informe.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $informe = Informe::create([
            'year' => $request->year,
            'periodo' => $request->periodo
        ]);

        if(Informe::all()->count() == 0){
            $informe->activo = true;
        }
        
        $informe->save();
        return Redirect::route('informe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $informe = Informe::find($id);
        session()->put('informe', $informe);
        return Redirect::route('area.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $informe = Informe::find($id);
        return view('admin.informes.edit')->with('informe', $informe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $informe = Informe::findOrFail($id);
        $informe->year = $request->year;
        $informe->periodo = $request->periodo;
        $informe->save();
        return Redirect::route('informe.index');
    }

    public function copiar($id)
    {

        $informe_a = Informe::find($id);

        $informe_b = Informe::create([
            'year' => $informe_a->year,
            'periodo' => $informe_a->periodo
        ]);

        $areas = $informe_a->areas()->get();
        foreach ($areas as $area) {
            //copiar area
            echo $area;
            $nueva_area = Area::create([
                'name' => $area->name,
            ]);
            $informe_b->areas()->save($nueva_area);

            $subareas = $area->subareas()->get();
            foreach ($subareas as $subarea) {
                //copiar subarea
                $nueva_subarea = Subarea::create([
                    'name' => $subarea->name,
                ]);

                $nueva_area->subareas()->save($nueva_subarea);

                $indicadores = $subarea->indicadores()->get();
                foreach($indicadores as $indicador){
                    //copiar indicador
                    $nuevo_indicador = Indicador::create([
                        'name' => $indicador->name,
                    ]);

                    $nueva_subarea->indicadores()->save($nuevo_indicador);
                }
            }
        }
        return Redirect::route('informe.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $informe = Informe::find($id);
        $informe->delete();
        return Redirect::back();
    }
}
