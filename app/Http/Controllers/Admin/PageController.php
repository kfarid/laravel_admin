<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use PhpParser\Node\Scalar\String_;

class PageController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }

    public function show(String $slug){
        $posts = Post::where('slug',$slug)->first();

        return view('show',compact('posts'));
    }
}
