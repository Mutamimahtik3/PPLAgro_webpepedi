<?php

namespace App\Http\Controllers\Admin;

use Auth;
use \App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class KonsultanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $route = 'a.konsultan.index';

    public function index()
    {
        $data = User::where('role','konsultan')->get();
        return view('admin.konsultan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.konsultan.create');
    }

    public function show($id)
    {
        $data = User::where('role','konsultan')->whereId($id)->first();
        return view('admin.konsultan.show', compact('data'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nohp' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        User::create([
            'role' => 'konsultan',
            'nohp' => $request->nohp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route($this->route);
    }
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('admin.konsultan.edit', compact('data'));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'nohp' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|min:8|confirmed',
        ]);
        User::whereId($id)
        ->update([
            'nohp' => $request->nohp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'name' => $request->name,
            // 'email' => $request->email,
            // 'password' => Hash::make($request->password),
        ]);

        return redirect()->route($this->route);
    }
}
