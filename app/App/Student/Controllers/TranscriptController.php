<?php

namespace App\App\Student\Controllers;

use Illuminate\Http\Request;

class TranscriptController
{
    /**
     * Display a listing of the resource.
     */
    public function pageTranscript()
    {
       return view('student.transcripts.main-transcript');
    }

    public function detailTranscript()
    {
        return view('student.transcripts.detail-transcript');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
}
