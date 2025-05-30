<?php

use App\App\Student\Controllers\ClassController as StudentClassController;
use App\App\Student\Controllers\TranscriptController as StudentTranscriptController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StudentClassController::class, 'mainPageClass'])->name('dashboard');


//CLASS ROUTES
Route::get('/class/list', [StudentClassController::class, 'mainPageClass'])->name('class.list');
Route::get('/class/my-class', [StudentClassController::class, 'pageClassJoined'])->name('class.joined');

Route::get('/class/joined-detail', [StudentClassController::class, 'detailClassJoined'])->name('class.detail.joined');
//END CLASS ROUTES



// TRANSCRIPTS
Route::get('/transcript', [StudentTranscriptController::class, 'pageTranscript'])->name('transcript.main');
Route::get('/transcript/detail', [StudentTranscriptController::class, 'detailTranscript'])->name('transcript.detail');
//END  TRANSCRIPTS


// EXERCISES REVIEW
Route::get('/exercises/review/quiz', [App\App\Student\Controllers\ExercisesReviewController::class, 'loadBroadQuizReview'])->name('exercises.review.quiz');
// END EXERCISES REVIEW