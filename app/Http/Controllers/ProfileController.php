<?php

namespace App\Http\Controllers;

use Auth;
use \App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
    	$data = Auth::user();
    	return view('profil.index', compact('data'));
    }
    public function edit()
    {
    	$data = Auth::user();
    	return view('profil.edit', compact('data'));
    }
    public function update($id, Request $request)
    {
        $roles = Auth::user()->role;
        if ($roles != 'admin') {
        	$request->validate([
    			'nohp' => 'required|string|max:255',
    			'jenis_kelamin' => 'required|string|max:255',
    			'alamat' => 'required|string|max:255',
    			'pekerjaan' => 'required|string|max:255',
    			'name' => 'required|string|max:255',
        	]);
        }else{
            $request->validate([
                // 'nohp' => 'required|string|max:255',
                // 'jenis_kelamin' => 'required|string|max:255',
                // 'alamat' => 'required|string|max:255',
                // 'pekerjaan' => 'required|string|max:255',
                'name' => 'required|string|max:255',
            ]);
        }
    	User::whereId($id)
    	->update([
    		'name' => $request->name,
			'nohp' => $request->nohp,
			'jenis_kelamin' => $request->jenis_kelamin,
			'alamat' => $request->alamat,
			'pekerjaan' => $request->pekerjaan,
    	]);
    	return redirect()->route('profile.index');
    }
}
