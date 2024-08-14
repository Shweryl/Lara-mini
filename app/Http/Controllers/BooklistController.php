<?php

namespace App\Http\Controllers;

use App\Models\Booklist;
use Illuminate\Http\Request;

class BooklistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booklists = Booklist::all();
        return view('Booklist.index', compact('booklists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Booklist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $booklist = new Booklist();
        $booklist->name = $request->name;
        $booklist->author = $request->author;
        $booklist->genres = $request->genres;
        $booklist->published_at = $request->published_at;
        $booklist->save();
        return redirect()->route('booklist.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $booklist = Booklist::find($id);
        return view('Booklist.edit',compact('booklist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $booklist = Booklist::find($id);
        $booklist->name = $request->name;
        $booklist->author = $request->author;
        $booklist->genres = $request->genres;
        $booklist->published_at = $request->published_at;
        $booklist->update();
        return redirect()->route('booklist.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booklist = Booklist::find($id);
        $booklist->delete();
        return redirect()->route('booklist.index');
    }
}
