<?php

namespace App\Http\Controllers\Konsultan;

use \App\PascaTanam;
use \App\Penjadwalan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndikatorPascatanamController extends Controller
{
	public function index()
    {
    	$data = PascaTanam::All();
    	return view('konsultan.pascatanam.index', compact('data'));
    }
    public function show($id)
    {
    	$data = PascaTanam::findOrFail($id);
    	return view('konsultan.pascatanam.show', compact('data'));
    }
}
