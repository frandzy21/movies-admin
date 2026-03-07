<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Requests\ArtistRequest;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = \App\Models\Artist::all();
        return view('artist.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArtistRequest $request)
    {
        $artist = new \App\Models\Artist();
        $artist->name = $request->name;
        $artist->genre = $request->genre;
        $artist->save();
        return redirect('/artists');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $artist = Artist::findorfail($id);
        return view('artist.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArtistRequest $request, $id)
    {
        $artist = Artist::findorfail($id);
        $artist->name = $request->name;
        $artist->genre = $request->genre;
        $artist->save();
        return redirect('/artists');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $artist = Artist::findorfail($id);
        $artist->delete();
        return redirect('/artists');
    }
}
