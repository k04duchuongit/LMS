<?php

namespace App\App\Lecturer\Controllers;

use Illuminate\Http\Request;

class ClassController
{
    /**
     * Display a listing of the resource.
     */
    public function LoadPageManagerClass()
    {
        return view('lecturer.class-v.classes-manager');
    }
    public function RegisterClass()
    {
        return view('lecturer.class-v.classes-register');
    }
}
