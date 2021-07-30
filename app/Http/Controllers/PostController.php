<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('adduser');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->save();
        return redirect('/sproject/adduser')->with('status', 'User Form Data Has Been inserted');
    }
	public function display(){
		$users = Post::all(); 
		return view('users', [
            'users' => $users,
        ]); 
	}
	
}
