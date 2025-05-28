<?php

namespace App\App\Lecturer\Controllers;

use Illuminate\Http\Request;

class DashboardLecturerController
{
    public function loadDashboard(Request $request)
    {
        return view('lecturer.dashboard');
    }
}
