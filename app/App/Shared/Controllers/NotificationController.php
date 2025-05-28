<?php

namespace App\App\Shared\Controllers;

use Illuminate\Http\Request;

class NotificationController
{
 public function createNotification()
    {
        return view('shared.notifications.notification-create');
    }

    public function createMail()
    {
        return view('shared.notifications.notification-email');
    }
    public function notificationHistory(){
        return view('shared.notifications.notifications-history');
    }
}
