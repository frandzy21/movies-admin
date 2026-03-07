<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;
use App\Http\Requests\TrackRequest;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tracks = Track::all();
        return view('track.index', compact('tracks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $albums = \App\Models\Album::all();
        return view('track.create', compact('albums'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TrackRequest $request)
    {
        $track = new Track();
        $track->title = $request->title;
        $track->duration = $request->duration;
        $track->album_id = $request->album_id;
        $track->save();
        return redirect('/tracks');
    }

    /**
     * Display the specified resource.
     */
    public function show(Track $track)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $track = Track::findorfail($id);
        $albums = \App\Models\Album::all();
        return view('track.edit', compact('track', 'albums'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $track = Track::findorfail($id);
        $track->title = $request->title;
        $track->duration = $request->duration;
        $track->album_id = $request->album_id;
        $track->save();
        return redirect('/tracks');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track, $id)
    {
        $track = Track::findorfail($id);
        $track->delete();
        return redirect('/tracks');
    }
}
