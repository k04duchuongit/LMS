<?php

use App\App\Shared\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;
use App\App\Shared\Controllers\BoxChatController;
use App\App\Shared\Controllers\ProfileController;

//NOTIFICATION
Route::get('/notification/create-notification', [NotificationController::class, 'createNotification'])->name('notification.create');
Route::get('/notification/sendmail-notification', [NotificationController::class, 'createMail'])->name('notification.sendMail');
Route::get('/notification/notification-history', [NotificationController::class, 'notificationHistory'])->name('notification.history');
//END NOTIFICATION

//PROFILE
Route::get('/profile', [ProfileController::class, 'pageProfile'])->name('profile.main');

Route::get('/profile/update', [ProfileController::class, 'loadPageUpdateProfile'])->name('profile.update');
//END PROFILE


//BOX CHAT
Route::get('/box-chat', [BoxChatController::class, 'pageBoxChat'])->name('box.chat');
//END BOX CHAT
