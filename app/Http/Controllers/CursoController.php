<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\Tags\See;
use Sanleo\Curso;
use Sanleo\User;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(session()->has('alumno')){
        session()->forget('alumno');
        }
        if (Session::has('user')) {
            $user = Session::get('user');
            return Redirect::route('user.show', $user);
        }
        return Redirect::route('/home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cursos.create');
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
        $user = $request->session()->get('user');
        $curso = Curso::create([
            'name' => $request->name,
            'id_profejefe' => $user->id,
        ]);
        $curso->save();
        $user->cursos()->attach($curso);
        //$profejefe->save();
        echo $curso;

        return Redirect::route('user.show', $user->id);
    }

    public function add_educadora($id)
    {
        $usuarios = User::where('rol', 'educadora')->get();
        session()->put('curso', Curso::find($id));

        return view('educadora.especialistas.especialistas')->with('usuarios', $usuarios);
    }

    public function set_educadora($educadora)
    {
        $user = User::find($educadora);
        $curso = session()->get('curso');
        $validate = false;
        $cursos = $user->cursos()->get();
        foreach ($cursos as $class) {

            if ($class->id == $curso->id) {
                $validate = true;
            }
        }
        if ($validate == false) {
            $user->cursos()->attach($curso);
        }

        return Redirect::route('curso.index');

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
        $curso = Curso::find($id);
        session()->put('curso', $curso);
        return Redirect::route('alumno.index');
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
        $curso = Curso::find($id);
        return view('admin.cursos.edit')->with('curso', $curso);
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
        $curso = Curso::findOrFail($id);
        $curso->name = $request->name;
        $curso->save();
        return Redirect::route('curso.index');
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
        $curso = Curso::find($id);
        $curso->delete();
        return Redirect::back();
    }
}
