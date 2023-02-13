<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Post,User};
class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        return view('posts.index',['posts'=>$posts]);
    }

    public function show($post)
    {
        $post=Post::find($post);
        return view('posts.show',['post'=>$post]); 
    }
    
    public function myPosts()
    {
        $posts=User::find(auth()->user()->id)->posts;
        return view('posts.index',['posts'=>$posts]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $post=$request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
       
        Post::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/');
    }

}
