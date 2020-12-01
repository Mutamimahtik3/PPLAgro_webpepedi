<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            return redirect('/admin');
        }else if(Auth::user()->role == 'konsultan'){
            return redirect('/konsultan');
        }
        return view('home');
    }
    public function indexAdmin()
    {
        return view('home');
    }
    public function indexKonsultan()
    {
        return view('home');
    }
}
