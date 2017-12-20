<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Discography;

class NewsController extends Controller
{

	public function index(){
		$posts = Post::orderBy('id', 'desc')->paginate(3);
		$discographies = Discography::all();
		return view('welcome')->with('discographies', $discographies)->with('posts', $posts);
	}
	// $homecontent=DB::table('contents')->where('menuname','home')->get();
  //  $slideshow=DB::table('slideshow')->get();
  //  return view('guest.home')->with('homecontent',$homecontent)->with('slideshow',$slideshow);

}
