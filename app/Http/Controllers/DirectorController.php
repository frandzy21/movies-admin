<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;
use App\Http\Requests\DirectorRequest;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directors = Director::all();
        return view('directors.index', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('directors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DirectorRequest $request)
    {
        $directors = new Director();
        $directors->name = $request->name;
        $directors->birth_year = $request->birth_year;
        $directors->save();
        return redirect('directors');
    }

    /**
     * Display the specified resource.
     */
    public function show(Director $director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Director $director)
    {
        return view('directors.edit', compact('director'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $director = Director::findorfail($id);
        $director->name = $request->name;
        $director->birth_year = $request->birth_year;
        $director->save();
        return redirect('directors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $director = Director::findorfail($id);
        $director->delete();
        return redirect('/directors');
    }
}
