<?php

namespace App\App\SuperAdmin\Controllers;

use Illuminate\Http\Request;

class DashboardAdminController
{
    public function loadDashboard(Request $request)
    {
        return view('supperadmin.dashboard');
    }
}
