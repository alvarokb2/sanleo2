<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Sanleo\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Hash;

class UserController extends Controller
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

        $rol = Auth::user()->rol;
        if ($rol == 'admin') {
            $usuarios = User::all();
            return view('admin.usuarios.usuarios')->with('usuarios', $usuarios);
        } elseif ($rol == 'educadora') {
            $usuarios = User::where('rol', 'apoderado')->get();
            return view('educadora.alumnos.apoderado.apoderado')->with('usuarios', $usuarios);
        }
        return Redirect::route('home');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $rol = Auth::user()->rol;
        if ($rol == 'admin' or $rol == 'directora') {
            return view('admin.usuarios.create');
        } else {
            return view('educadora.alumnos.apoderado.create');
        }
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
        $pos = strpos($request->email, '@');
        $pass = bcrypt(substr($request->email, 0, $pos));


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'rol' => $request->rol,
            'password' => $pass,
        ]);


        $this->asignar_apoderado($user->id);
        $rol = Auth::user()->rol;
        if ($rol == 'admin' or $rol == 'directora') {
            return Redirect::route('user.index');
        } else {
            return Redirect::route('alumno.index');
        }

    }

    public function asignar_apoderado($id)
    {
        $user = User::find($id);
        if (Auth::user()->rol == 'educadora') {
            if (session()->has('alumno')) {
                $user->alumnos()->save(session()->get('alumno'));
                return Redirect::route('alumno.index');
            }
        }
    }

    public function restablecer_pass()
    {
        $user = session()->get('apoderado');
        $pos = strpos($user->email, '@');
        $pass = bcrypt(substr($user->email, 0, $pos));
        $user->password = $pass;
        $user->save();
        return Redirect::back();
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
        $user = User::find($id);
        $cursos = $user->cursos()->get();
        session()->put('user', $user);
        $autenticado = Auth::user();
        if ($autenticado->rol == 'admin') {
            return view('admin.cursos.cursos')->with('cursos', $cursos);

        } else {
            return view('educadora.cursos.cursos')->with('cursos', $cursos);

        }
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
        $user = User::find($id);
        $autenticado = Auth::user();
        if ($autenticado->rol == 'admin') {
            return view('admin.usuarios.edit')->with('user', $user);
        } else {
            return view('educadora.alumnos.apoderado.edit')->with('apoderado', $user);
        }


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
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->rol = $request->rol;
        $user->save();
        return Redirect::route('home');
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
        $user = User::find($id);
        $user->delete();
        return Redirect::route('user.index');
    }
}
