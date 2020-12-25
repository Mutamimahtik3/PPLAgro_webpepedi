<?php

namespace App\Http\Controllers\Petani;

use Auth;
use \App\Padi;
use \App\Penjadwalan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class PadiController extends Controller
{
	public $route = 'p.padi.index';
    public function index()
    {
    	$data = Auth::user()->padi;
    	return view('petani.padi.index', compact('data'));
    }
    public function create()
    {
    	return view('petani.padi.create');
    }
    public function show($id)
    {
    	$data = Padi::whereId($id)
    		->where('user_id',Auth::user()->id)
    		->firstOrFail();
    	return view('petani.padi.show', compact('data'));
    }
    public function edit($id)
    {
    	$data = Padi::whereId($id)
    		->where('user_id',Auth::user()->id)
    		->firstOrFail();
    	return view('petani.padi.edit', compact('data'));
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'jenis_padi' => 'required',
            'varietas' => 'required',
            'tipe_padi' => 'required',            
    	]);
        $jenis_padi = $request->jenis_padi;
        $varietas = $request->varietas;
        $tipe_padi = $request->tipe_padi;

        return view('petani.padi.proses', compact('jenis_padi','varietas','tipe_padi'));
    }
    public function storeProses(Request $request, $jenis_padi, $varietas,$tipe_padi)
    {
        $request->validate([
            'proses' => 'required',
        ]);
        $proses = $request->proses;
        $jenis_padi = $jenis_padi;
        $tipe_padi = $tipe_padi;
        $varietas = $varietas;
        if ($proses == 'Pra-Tanam') {
            return view('petani.indikator.pratanam', compact('jenis_padi','varietas', 'proses','tipe_padi'));
        }else if($proses == 'Tanam'){
            return view('petani.indikator.tanam', compact('jenis_padi','varietas', 'proses','tipe_padi'));
        }else if($proses == 'Pasca-Tanam'){
            return view('petani.indikator.pascatanam', compact('jenis_padi','varietas', 'proses','tipe_padi'));
        }
    }
    public function update($id, Request $request)
    {
    	$request->validate([
    		'jenis_padi' => 'required',
			'varietas' => 'required',
    	]);
    	Padi::whereId($id)
    		->update([
    			'jenis_padi' => $request->jenis_padi,
				'varietas' => $request->varietas,
    		]);
    	return redirect()->route('p.padi.index');
    }
    public function destroy($id)
    {
    	// Padi::whereId($id)
    	// 	->update()
    	// return redirect()->route($this->route);
    }
    public function catatan($id, Request $request)
    {
        $request->validate([
            'catatan' => 'required',
        ]);
        Penjadwalan::whereId($id)
        ->update([
            'catatan' => $request->catatan,
        ]);
        return redirect()->back();
    }
    public function status($id, Request $request)
    {
        $request->validate([
            'status' => 'required',
        ]);
        Penjadwalan::whereId($id)
        ->update([
            'status' => $request->status,
        ]);
        return redirect()->back();
    }
    
}
