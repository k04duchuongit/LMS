<?php

use Illuminate\Support\Facades\Route;

use App\App\Lecturer\Controllers\DashboardLecturerController;
use App\App\Lecturer\Controllers\ClassController as LecturerClassController;
use App\App\Lecturer\Controllers\ExerciseController as LecturerExerciseController;
use App\App\Lecturer\Controllers\StudentController as LecturerStudentController;

Route::get('/', [DashboardLecturerController::class, 'loadDashboard'])->name('dashboard');


//CLASS ROUTES
Route::get('/class/list', [LecturerClassController::class, 'LoadPageManagerClass'])->name('class.list');
Route::get('/class/register', [LecturerClassController::class, 'RegisterClass'])->name('class.register');
//END CLASS ROUTES

//EXERCISE ROUTES
Route::get('/exercise/list', [LecturerExerciseController::class, 'LoadPageManagerExercise'])->name('exercise.list');
Route::get('/exercise/create-essay', [LecturerExerciseController::class, 'createEssay'])->name('exercise.create-essay');
Route::get('/exercise/create-quiz', [LecturerExerciseController::class, 'createQuiz'])->name('exercise.create-quiz');
Route::get('/exercise/pending', [LecturerExerciseController::class, 'LoadPagePending'])->name('exercise.pending');
//END EXERCISE ROUTES


//STUDENT ROUTES
Route::get('/student/list', [LecturerStudentController::class, 'LoadPageManagerStudent'])->name('student.list');
//END STUDENT ROUTES

// Route::resource('student',LecturerStudentController::class);