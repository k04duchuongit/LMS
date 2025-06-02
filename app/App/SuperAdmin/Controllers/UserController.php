<?php

namespace App\App\SuperAdmin\Controllers;

use App\Domain\User\Actions\ListUserAction;
use App\App\SuperAdmin\ViewModels\UserViewModel;
use Illuminate\Http\Request;

class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserViewModel $userViewModel)
    {

        return view('supperadmin.client-v.manager-client', compact('userViewModel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supperadmin.client-v.add-client');
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
