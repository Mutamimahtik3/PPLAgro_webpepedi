<?php

namespace App\Http\Controllers\Konsultan;

use \App\Pratanam;
use \App\Penjadwalan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndikatorPratanamController extends Controller
{
	public function index()
    {
    	$data = Pratanam::All();
    	return view('konsultan.pratanam.index', compact('data'));
    }
    public function show($id)
    {
    	$data = Pratanam::findOrFail($id);
    	return view('konsultan.pratanam.show', compact('data'));
    }
}
