<?php

namespace App\Http\Controllers;

use App\Discography;
use Illuminate\Http\Request;
use Session;

class DiscographyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $discographys = Discography::orderBy('id', 'desc')->paginate(10);


        return view('discographys.index', compact('discographys'));

     //      $discographies = Discography::orderBy('id', 'desc')->paginate(10);
     // return view('discographys.index')->withPosts($discographies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('discographys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $discography = new Discography;
        $discography->title = $request->title;

        $discography->save();
        return view('discographys.show')->withDiscography($discography);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $discography = Discography::find($id);
        return view('discographys.show')->withDiscography($discography);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discography = Discography::find($id);
        return view('discographys.edit')->withDiscography($discography);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $discography = Discography::find($id);
        $discography->title = $request->input('title');

        $discography->save();

        Session::flash('success', 'News zostal edytowany');

        return redirect()->route('discography.show', $discography->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discography = Discography::find($id);
       $discography->delete();

       Session::flash('success', 'News zostal usuniety');

       return redirect()->route('discography.index');
    }
}
