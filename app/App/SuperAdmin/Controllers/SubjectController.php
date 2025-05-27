<?php

namespace App\App\SuperAdmin\Controllers;

use Illuminate\Http\Request;

class SubjectController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('supperadmin.subject.mannager-subject');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supperadmin.subject.subject-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    // Assign classes to instructors
    public function assignSubject()
    {

        return view('supperadmin.subject.subject-assgin');
    }
}
