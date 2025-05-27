<?php

use Illuminate\Support\Facades\Route;
use App\App\SuperAdmin\Controllers\ClassController as AdminClassController;
use App\App\SuperAdmin\Controllers\DashboardAdminController;
use App\App\SuperAdmin\Controllers\SubjectController as AdminSubjectController;
use App\App\SuperAdmin\Controllers\UserController as AdminUserController;

Route::get('/dashboard', [DashboardAdminController::class, 'loadDashboard'])->name('dashboard');
Route::resource('user', AdminUserController::class);

Route::get('subject/assign', [AdminSubjectController::class, 'assignSubject'])->name('subject.assign');
Route::resource('subject', AdminSubjectController::class);

Route::get('class/approve', [AdminClassController::class, 'approveClass'])->name('class.approve');
Route::resource('class', AdminClassController::class);
