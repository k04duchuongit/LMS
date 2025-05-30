<?php

namespace App\App\Student\Controllers;

use Illuminate\Http\Request;

class ExercisesReviewController
{
    public function loadBroadQuizReview(){
        return view('student.exercises.review.review-quiz');
    }
}
