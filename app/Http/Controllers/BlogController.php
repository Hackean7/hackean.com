<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
		
	public function getIndex() {
		
		$posts = Post::paginate(15);
		
		return view ('blog.index')->withPosts($posts);

	}

    public function getSingle($slug) {

    	// fetch from the db based on slug
    		$post = Post::where('slug', '=', $slug)->first();

    	//  return the view and pass the post object
    		return view('blog.single')->withPost($post);
    }
}
