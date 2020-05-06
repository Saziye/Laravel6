<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserNotificationsController extends Controller
{
    public function show()
    {
        // $notifications = auth()->user()->notifications;
        /*$notifications = auth()->user()->unreadNotifications;
        $notifications->markAsRead();*/

        return view('notifications.show', [
            // 'notifications' => $notifications 
            'notifications' => tap(auth()->user()->unreadNotifications)->markAsRead()
        ]);
    }
}
