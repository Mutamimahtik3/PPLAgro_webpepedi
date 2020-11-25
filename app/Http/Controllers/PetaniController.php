<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaniController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request()->user()->hasRole('Petani')) {
            return view('petani.index');
        } else {
            return redirect('/');
        }
    }
}
