<?php

namespace App\Http\Controllers\Petani;

use Auth;
use \App\Padi;
use \App\Pratanam;
use \App\PascaTanam;
use \App\Tanam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndikatorController extends Controller
{
    public $route = 'p.padi.index';
    public function inikatorPrataman(Request $request, $varietas, $jenis_padi)
    {
    	$padi = Padi::create([
    		'user_id' => Auth::user()->id,
			'jenis_padi' => $jenis_padi,
			'varietas' => $varietas,
    	]);
    	Pratanam::create([
    		'padi_id' => $padi->id,
			'tgl_persemaian' => $request->tgl_persemaian,
			'banyak_benih' => $request->banyak_benih,
			'jenis_tanah' => $request->jenis_tanah,
    	]);
    	return redirect()->route($this->route);
    }
    public function inikatorPascatanam(Request $request, $varietas, $jenis_padi)
    {
        $padi = Padi::create([
            'user_id' => Auth::user()->id,
            'jenis_padi' => $jenis_padi,
            'varietas' => $varietas,
        ]);
        PascaTanam::create([
            'padi_id' => $padi->id,
            'tgl_panen' => $request->tgl_panen,
            'kondisi_gabah' => $request->kondisi_gabah,
        ]);
        return redirect()->route($this->route);
    }
    public function inikatorTanam(Request $request, $varietas, $jenis_padi)
    {
        $padi = Padi::create([
            'user_id' => Auth::user()->id,
            'jenis_padi' => $jenis_padi,
            'varietas' => $varietas,
        ]);
        Tanam::create([
            'padi_id' => $padi->id,
            'lokasi' => $request->lokasi,
            'luas_lahan' => $request->luas_lahan,
            'jenis_tanah' => $request->jenis_tanah,
            'jenis_pupuk' => $request->jenis_pupuk,
            'ph_tanah' => $request->ph_tanah,
            'kondisi_tanaman' => $request->kondisi_tanaman,
        ]);
        return redirect()->route($this->route);
    }
    
    public function praTanam()
    {
        $data = Pratanam::with('penjadwalan')
            ->get();
        // return $data;
        return view('petani.pratanam.index', compact('data'));
    }
    public function showPraTanam($id)
    {
        $data = Pratanam::whereId($id)->firstOrFail();
        return view('petani.pratanam.show', compact('data'));
    }
    public function tanam()
    {
        $data = Tanam::with('penjadwalan')
            ->get();
        return view('petani.tanam.index', compact('data'));
    }
    public function showTanam($id)
    {
        $data = Tanam::whereId($id)->firstOrFail();
        return view('petani.tanam.show', compact('data'));
    }
    public function pascaTanam()
    {
        $data = PascaTanam::with('penjadwalan')
            ->get();
        return view('petani.pascatanam.index', compact('data'));
    }
    public function showPascaTanam($id)
    {
        $data = PascaTanam::whereId($id)->firstOrFail();
        return view('petani.pascatanam.show', compact('data'));
    }
    //====route to edit page=========/
    public function editPascaTanam($id)
    {
        $data = PascaTanam::whereId($id)->firstOrFail();
        return view('petani.pascatanam.edit', compact('data'));

    }
    public function editTanam($id)
    {
        $data = Tanam::whereId($id)->firstOrFail();
        return view('petani.tanam.edit', compact('data'));

    }
    public function editPratanam($id)
    {
        $data = Pratanam::whereId($id)->firstOrFail();
        return view('petani.pratanam.edit', compact('data'));

    }

    //========update========//
    public function updatePascaTanam($id, Request $request)
    {
        $request->validate([
            'jenis_padi' => 'required|string|max:255',
            'varietas' => 'required|string|max:255',
            'tgl_panen' => 'required',
            'kondisi_gabah' => 'required',            
        ]);
        $x = PascaTanam::find($id);
        $y = $x->padi->id;
        $x->update([
            'tgl_panen' => $request->tgl_panen,
            'kondisi_gabah' => $request->kondisi_gabah,
        ]);
        Padi::whereId($y)
        ->update([
            'jenis_padi' => $request->jenis_padi, 
            'varietas' => $request->varietas, 
        ]);
        return redirect()->route('p.i.ps.show', ['id' => $id]);
    }
    public function updatePraTanam($id, Request $request)
    {
        $request->validate([
            'jenis_padi' => 'required|string|max:255',
            'varietas' => 'required|string|max:255',
            'tgl_persemaian' => 'required',
            'banyak_benih' => 'required',            
            'jenis_tanah' => 'required',            
        ]);
        $x = Pratanam::find($id);
        $y = $x->padi->id;
        $x->update([
            'tgl_persemaian' => $request->tgl_persemaian,
            'banyak_benih' => $request->banyak_benih,
            'jenis_tanah' => $request->jenis_tanah,
        ]);
        Padi::whereId($y)
        ->update([
            'jenis_padi' => $request->jenis_padi, 
            'varietas' => $request->varietas, 
        ]);
        return redirect()->route('p.i.pra.show', ['id' => $id]);
    }
    public function updateTanam($id, Request $request)
    {
        $request->validate([
            'jenis_padi' => 'required|string|max:255',
            'varietas' => 'required|string|max:255',
            'lokasi' => 'required',
            'luas_lahan' => 'required',
            'jenis_tanah' => 'required',
            'jenis_pupuk' => 'required',
            'ph_tanah' => 'required',
            'kondisi_tanaman' => 'required',     
        ]);
        $x = Tanam::find($id);
        $y = $x->padi->id;
        $x->update([
            'lokasi' => $request->lokasi,
            'luas_lahan' => $request->luas_lahan,
            'jenis_tanah' => $request->jenis_tanah,
            'jenis_pupuk' => $request->jenis_pupuk ,
            'ph_tanah' => $request->ph_tanah ,
            'kondisi_tanaman' => $request->kondisi_tanaman ,
        ]);
        Padi::whereId($y)
        ->update([
            'jenis_padi' => $request->jenis_padi, 
            'varietas' => $request->varietas, 
        ]);
        return redirect()->route('p.i.in.show', ['id' => $id]);
    }
}
