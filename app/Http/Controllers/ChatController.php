<?php

namespace App\Http\Controllers;

use Auth;
use \App\User;
use \App\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $data = User::where('id','!=',Auth::user()->id)->get();
        return view('chat.awal', compact('data'));
    }
    public function show($id)
    {
    	
    	$userid = Auth::user()->id;
    	$to = $id;
    	$subject = User::find($to);
    	$data = Chat::where('reciever_id', $userid)
    		->where('sender_id',$to)
    		->orWhere('reciever_id', $to)
    		->orWhere('sender_id', $userid)
    		->get();
		$chats = Chat::where('reciever_id', $userid)
    		->where('sender_id',$to)
    		->orWhere('reciever_id', $to)
    		->orWhere('sender_id', $userid)
    		->get();
		// return $data;
    	$user = User::findOrFail($id);
    	return view('chat.index', compact('data','user','chats'));
    }
    public function store($id, Request $request)
    {
    	Chat::create([
			'sender_id' => Auth::user()->id,
			'reciever_id' => $id,
			'value' => $request->value,
    	]);
    	return redirect()->back();
    }
    public function FunctionName($value='')
    {
    	# code...
    }
}
