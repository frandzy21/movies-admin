<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Concert;
use App\Http\Requests\ConcertRequest;

class ConcertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $concerts = Concert::all();
        return view('concert.index', compact('concerts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artists = Artist::all();
        return view('concert.create', compact('artists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConcertRequest $request)
    {
        $artists = Artist::all();
        Concert::create($request->validated());
        return redirect('/concerts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Concert $concerts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $concert = Concert::findorfail($id);
        $artists = Artist::all();
        return view('concert.edit', compact('artists' , 'concert'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ConcertRequest $request, $id)
    {
        $concert = Concert::findorfail($id);
        $concert->update($request->validated());
        return redirect('/concerts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Concert $concert, $id)
    {
        $concert = Concert::findorfail($id);
        $concert->delete();
        return redirect('/concerts');
    }
}
