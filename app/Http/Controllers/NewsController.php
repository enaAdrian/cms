<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class NewsController extends Controller
{
	public function index(){
		$posts = Post::orderBy('id', 'desc')->paginate(3);
		return view('welcome')->withPosts($posts);
	}
    
}
