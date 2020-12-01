<?php

namespace App\Http\Controllers\Konsultan;

use \App\Tanam;
use \App\Penjadwalan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndikatorTanamController extends Controller
{
	public function index()
    {
    	$data = Tanam::All();
    	return view('konsultan.tanam.index', compact('data'));
    }
    public function show($id)
    {
    	$data = Tanam::findOrFail($id);
    	return view('konsultan.tanam.show', compact('data'));
    }
}
