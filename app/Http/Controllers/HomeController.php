<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $posts = Post::where('featured', false)
            ->with('user', 'categories')
            ->get();
        $featured = Post::featured()->take(3)->get();
        return view('home', [
            'posts' => $posts,
            'featured' => $featured
        ]);
    }
}
