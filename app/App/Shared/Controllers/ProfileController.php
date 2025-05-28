<?php

namespace App\App\Shared\Controllers;

use Illuminate\Http\Request;

class ProfileController
{
 public function pageProfile()
    {
        return view('shared.account.main-info');
    }

    public function loadPageUpdateProfile()
    {
        return view('shared.account.edit-info');
    }
}
