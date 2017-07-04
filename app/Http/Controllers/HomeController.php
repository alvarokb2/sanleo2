<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Sanleo\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Update the password for the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'old' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::find(Auth::id());
        $hashedPassword = $user->password;

        if (Hash::check($request->old, $hashedPassword)) {
            //Change the password
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();

            $request->session()->flash('success', 'Contraseña cambiada.');

            return Redirect::route('home');
        }

        $request->session()->flash('failure', 'La contraseña no ha podido ser cambiada.');

        return back();


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        switch ($user->rol){
            case 'apoderado':
                $alumnos = Auth::user()->alumnos()->get();
                
                
                return view('home')->with('rol', $user->rol);
            case 'admin':
                return Redirect::route('user.index');
            case 'educadora':

                Session::put('user', $user);
                return Redirect::route('curso.index');
            case 'directora':
                return view('home')->with('rol', $user->rol);
        }

        //return view('home');
    }
}
