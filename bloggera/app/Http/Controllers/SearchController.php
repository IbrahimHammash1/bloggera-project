<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Post,User};
class SearchController extends Controller
{
    public function postsSearch()
    {
        $posts=Post::where('body','like','%'.request('search').'%')->get();
        return view('posts.index',['posts'=>$posts]);
    }
}
