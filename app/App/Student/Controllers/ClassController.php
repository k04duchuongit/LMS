<?php

namespace App\App\Student\Controllers;

use Illuminate\Http\Request;

class ClassController
{
    // load main page class
    public function mainPageClass()
    {
        return view('student.class-v.main-page-class');
    }

    // detail class 
    public function detailClass()
    {
        return view('student.class-v.class-detail');
    }
    
    //list class joined
    public function pageClassJoined()
    {
        return view('student.class-v.list-class-joined');
    }
}
