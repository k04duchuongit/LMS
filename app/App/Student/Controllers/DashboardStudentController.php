<?php

namespace App\App\Student\Controllers;

use Illuminate\Http\Request;

class DashboardStudentController
{
    public function loadDashboard(Request $request)
    {
        return view('student.dashboard.index');
    }
}
