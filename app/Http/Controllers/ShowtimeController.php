<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Showtime;
use Illuminate\Http\Request;
use App\Http\Requests\ShowtimeRequest;

class ShowtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showtimes = Showtime::all();
        return view('showtimes.index', compact('showtimes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies = Movie::all();
        return view('showtimes.create', compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShowtimeRequest $request)
    {
        Showtime::create($request->validated());
        return redirect('/showtimes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Showtime $showtime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Showtime $showtime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Showtime $showtime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $showtime = Showtime::findorfail($id);
        $showtime->delete();
        return redirect('/showtimes');
    }
}
