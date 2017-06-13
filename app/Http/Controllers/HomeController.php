<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rol = Auth::user()->rol;

        switch ($rol){
            case 'apoderado':
                return view('home')->with('rol', $rol);
            case 'admin':
                return Redirect::route('user.index');
            case 'educadora':
                return view('home')->with('rol', $rol);
            case 'directora':
                return view('home')->with('rol', $rol);
        }

        //return view('home');
    }
}
