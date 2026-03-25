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
    public function store(AlbumRequest $request)
    {
        Album::create($request->validated());
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
    public function update(AlbumRequest $request, $id)
    {
        $album = Album::findorfail($id);
        Album::update($request->validated());
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
