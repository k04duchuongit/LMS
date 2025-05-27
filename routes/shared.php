<?php

use App\App\Shared\Controllers\Notification;
use Illuminate\Support\Facades\Route;
use App\App\SuperAdmin\Controllers\ClassController as AdminClassController;
use App\App\SuperAdmin\Controllers\DashboardAdminController;
use App\App\SuperAdmin\Controllers\SubjectController as AdminSubjectController;
use App\App\SuperAdmin\Controllers\UserController as AdminUserController;

Route::get('/create-notification', [Notification::class, 'createNotification'])->name('notification.create');
Route::get('/sendmail-notification', [Notification::class, 'createMail'])->name('notification.sendMail');
Route::get('/notification-history', [Notification::class, 'notificationHistory'])->name('notification.history');
