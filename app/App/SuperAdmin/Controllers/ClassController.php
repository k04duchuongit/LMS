<?php

namespace App\App\SuperAdmin\Controllers;

use Illuminate\Http\Request;

class ClassController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('supperadmin.class-v.manager-classes');

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

    //Approve class creation request from instructor
    public function approveClass()
    {

        return view('supperadmin.class-v.classes-approve');
    }
}
