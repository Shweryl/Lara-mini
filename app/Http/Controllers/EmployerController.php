<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employers = Employer::all();
        return view('Employer.index', compact('employers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Employer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employer = new Employer();
        $employer->name = $request->name;
        $employer->age = $request->age;
        $employer->gender = $request->gender;
        $employer->position = $request->position;
        $employer->year_of_experience = $request->year_of_experience;
        $employer->save();
        return redirect()->route('employer.index');
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
        $employer = Employer::find($id);
        return view('Employer.edit', compact('employer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employer = Employer::find($id);
        $employer->name = $request->name;
        $employer->age = $request->age;
        $employer->gender = $request->gender;
        $employer->position = $request->position;
        $employer->year_of_experience = $request->year_of_experience;
        $employer->update();
        return redirect()->route('employer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employer = Employer::find($id);
        $employer->delete();
        return redirect()->route('employer.index');
    }
}
