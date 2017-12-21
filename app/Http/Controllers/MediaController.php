<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;
use Session;
use Image;
use Storage;

class MediaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $medias = Media::orderBy('id', 'desc')->paginate(10);
     return view('medias.index', compact('medias'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validation
      $this->validate($request, array(
          'title' => 'required|max:255',
          'link' => 'required',
          'media_image' => 'image'
      ));
      //store
      $media = new Media;

      $media->title = $request->title;
      $media->link = $request->link;

      if($request->hasFile('media_image'))
      {
        $image = $request->file('media_image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('medias/'. $filename);
        Image::make($image)->resize(200, 200)->save($location);

        $media->image = $filename;
      }

      $media->save();

      Session::flash('success', 'News dodano poprawnie!');

      return view('medias.show')->withMedia($media);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $media =  Media::find($id);
      return view('medias.show')->withMedia($media);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $media = Media::find($id);
      return view('medias.edit')->withMedia($media);
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
      $this->validate($request, array(
          'title' => 'required|max:255',
          'link' => 'required',
          'media_image' => 'image'
      ));
      //edit posts

      $media = Media::find($id);
      $media->title = $request->input('title');
      $media->link = $request->input('link');


      if ($request->hasFile('media_image'))
        {
          $image = $request->file('media_image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('medias/' . $filename);
          Image::make($image)->resize(200, 200)->save($location);
          $oldFilename = $media->image;
          $media->image = $filename;
          Storage::delete($oldFilename);
        }

      $media->save();

      Session::flash('success', 'News zostal edytowany');

      return redirect()->route('medias.show', $media->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $media = Media::find($id);
      Storage::delete($media->image);
      $media->delete();

      Session::flash('success', 'News zostal usuniety');
      return redirect()->route('medias.index');
    }
}
