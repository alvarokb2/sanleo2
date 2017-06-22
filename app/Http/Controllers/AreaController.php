<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Sanleo\Informe;
use Sanleo\Area;
use Illuminate\Support\Facades\Session;

class AreaController extends Controller
{
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
        $area = Area::find($id);
        session()->put('area', $area);
        $subareas = $area->subareas()->get();
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
        $area = Area::find($id);
        $area->delete();
        return Redirect::back();
    }
}