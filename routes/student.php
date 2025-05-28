<?php

use App\App\Student\Controllers\ClassController as StudentClassController;
use App\App\Student\Controllers\TranscriptController as StudentTranscriptController;
use Illuminate\Support\Facades\Route;

//CLASS ROUTES
Route::get('/class/list', [StudentClassController::class, 'mainPageClass'])->name('class.list');
Route::get('/class/my-class', [StudentClassController::class, 'pageClassJoined'])->name('class.joined');
//END CLASS ROUTES



//CLASS TRANSCRIPTS
Route::get('/transcript', [StudentTranscriptController::class, 'pageTranscript'])->name('transcript.main');
//END CLASS TRANSCRIPTS