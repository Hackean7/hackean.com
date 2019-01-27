<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaraFlash;
use App\Post;

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
    public function index()
    {
        LaraFlash::add()->content('Hello World')->priority(6)->type('Info');
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('home')->withPosts($posts);
    }
}
