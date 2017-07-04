<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Sanleo\Alumno;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        
        $curso = session()->get('curso');
        $alumnos = $curso->alumnos()->get();
        return view('educadora.alumnos.alumnos')->with('alumnos', $alumnos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('educadora.alumnos.create');
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
        $alumno = Alumno::create([
            'name' => $request->name,
            'edad' => $request->edad,
            'fecha_nacimiento' => $request->fecha_nacimiento,
        ]);
        $alumno->save();
        $curso = session()->get('curso');
        $curso->alumnos()->save($alumno);
        return Redirect::route('alumno.index');
        
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
        $alumno = Alumno::find($id);
        session()->put('alumno', $alumno);
        return Redirect::route('resultado.index');
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
        $alumno = Alumno::find($id);
        session()->put('alumno', $alumno);
        $curso = $alumno->curso();
        return view('educadora.alumnos.edit')->with(['curso' => $curso, 'alumno' => $alumno]);
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
        $alumno = Alumno::findOrFail($id);
        $alumno->name = $request->name;
        $alumno->edad = $request->edad;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;
        $alumno->save();
        return Redirect::route('alumno.index');
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
        $alumno = Alumno::find($id);
        $alumno->delete();
        return Redirect::back();
    }
}
