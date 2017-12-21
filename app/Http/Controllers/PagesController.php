<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('welcome');
    }

    public function getMedia()
    {
      $medias = Media::orderBy('id', 'desc')->paginate(10);
  		return view('multimedia')->with('medias', $medias);
    }

    public function getContact()
    {
        return view('contact');
    }
    public function getGallery()
    {
      return view('gallery');
    }

}
