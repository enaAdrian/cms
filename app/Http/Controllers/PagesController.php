<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('welcome');
    }

    public function getMedia()
    {
        return view('media');
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
