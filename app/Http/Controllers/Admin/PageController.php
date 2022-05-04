<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use PhpParser\Node\Scalar\String_;

class PageController extends Controller
{
    public function index(){
        $posts = Post::all();
        $categories = Category::orderBy('created_at','desc')->get();
        $contact = Contact::all();
        return view('front.index', compact('posts', 'categories', 'contact'));
    }

    public function show(String $slug){
        $posts = Post::where('slug',$slug)->first();
        $categories = Category::orderBy('created_at','desc')->get();
        $contact = Contact::all();
        return view('front.show',compact('posts','categories', 'contact'));
    }
}
