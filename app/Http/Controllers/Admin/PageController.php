<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PageController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }
}
