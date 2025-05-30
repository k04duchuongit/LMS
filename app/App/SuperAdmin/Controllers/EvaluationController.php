<?php

namespace App\App\SuperAdmin\Controllers;

use Illuminate\Http\Request;

class EvaluationController
{
    public function pageEvaluation(Request $request)
    {
        // Logic for handling the evaluation page
        return view('superadmin.evaluation.page');
    }
}
