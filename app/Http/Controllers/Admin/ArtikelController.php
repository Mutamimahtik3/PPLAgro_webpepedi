<?php

namespace App\Http\Controllers\Admin;

use Auth;
use \App\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Artikel::All();
        return view('admin.artikel.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:30',
            'gambar' => 'required|image',
            'konten' => 'required',
            'kategori' => 'required',
        ]);
        $nameFile = date('Y-m-d H:i:s').' '.$request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->storeAs('public/artikel/',$nameFile);
        Artikel::create([
            'user_id' => Auth::user()->id,
            'judul' => $request->judul,
            'gambar' => $nameFile,
            'isi' => $request->konten,
            'kategori' => $request->kategori,
        ]);
        return redirect()->route('a.artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Artikel::findOrFail($id);
        return view('admin.artikel.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Artikel::findOrFail($id);
        return view('admin.artikel.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|max:30',
            'gambar' => 'image',
            'konten' => 'required',
            'kategori' => 'required',
        ]);
        if ($request->file('gambar')) {
            $nameFile = date('Y-m-d H:i:s').' '.$request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->storeAs('public/artikel/',$nameFile);
            Artikel::whereId($id)
            ->update([
                'judul' => $request->judul,
                'gambar' => $nameFile,
                'isi' => $request->konten,
                'kategori' => $request->kategori,
            ]);
        }else{
            Artikel::whereId($id)
            ->update([
                'judul' => $request->judul,
                'isi' => $request->konten,
                'kategori' => $request->kategori,
            ]);
        }
        return redirect()->route('a.artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Artikel::findOrFail($id);
        $a->delete();

        return redirect()->route('a.artikel.index');
    }
}
