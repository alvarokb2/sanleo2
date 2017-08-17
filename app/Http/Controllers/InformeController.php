<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Sanleo\Area;
use Sanleo\Informe;

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
        $informes = Informe::all();
        if(session()->has('alumno')){
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $informe = Informe::create([
            'year' => $request->year,
            'periodo' => $request->periodo
        ]);
        $informe->save();
        return Redirect::route('informe.index');
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
        $informe = Informe::find($id);
        session()->put('informe', $informe);
        return Redirect::route('area.index');

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
        $informe = Informe::find($id);
        return view('admin.informes.edit')->with('informe', $informe);
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
        $informe = Informe::findOrFail($id);
        $informe->year = $request->year;
        $informe->periodo = $request->periodo;
        $informe->save();
        return Redirect::route('informe.index');
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
        $informe = Informe::find($id);
        $informe->delete();
        return Redirect::back();
    }
}
