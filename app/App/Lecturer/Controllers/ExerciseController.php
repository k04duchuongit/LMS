<?php

namespace App\App\Lecturer\Controllers;

use Illuminate\Http\Request;

class ExerciseController
{

    public function LoadPageManagerExercise()
    {
        return view('lecturer.exercise.exercise-manager');
    }

    public function createEssay()
    {
        return view('lecturer.exercise.exercise-create-essay');
    }

    public function createQuiz()
    {
        return view('lecturer.exercise.exercise-create-quiz');
    }
    public function LoadPagePending()
    {
        return view('lecturer.exercise.exercise-list-pending');
    }
}
