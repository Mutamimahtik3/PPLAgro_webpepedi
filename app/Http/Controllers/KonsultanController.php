<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsultanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request()->user()->hasRole('Konsultan')) {
            return view('konsultan.index');
        } else {
            return redirect('/');
        }
    }
}
