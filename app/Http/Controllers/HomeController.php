<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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
        $user = Auth::user();

        switch ($user->rol){
            case 'apoderado':
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
