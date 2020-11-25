<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->user()->hasRole('Admin')) {
            return redirect('admin');
        }

        if ($request->user()->hasRole('Petani')) {
            return redirect('petani');
        }

        if ($request->user()->hasRole('Konsultan')) {
            return redirect('konsultan');
        }
    }
}
