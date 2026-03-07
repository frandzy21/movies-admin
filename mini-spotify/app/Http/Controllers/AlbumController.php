<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Requests\AlbumRequest;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();
        return view('album.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artists = \App\Models\Artist::all();
        return view('album.create', compact('artists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $album = new Album();
        $album->title = $request->title;
        $album->release_year = $request->release_year;
        $album->artist_id = $request->artist_id;
        $album->save();
        return redirect('/albums');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $album = Album::findorfail($id);
        $artists = \App\Models\Artist::all();
        return view('album.edit', compact('artists' , 'album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $album = Album::findorfail($id);
        $album->title = $request->title;
        $album->release_year = $request->release_year;
        $album->artist_id = $request->artist_id;
        $album->save();
        return redirect('/albums');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album, $id)
    {
        $album = Album::findorfail($id);
        $album->delete();
        return redirect('/albums');
    }
}
