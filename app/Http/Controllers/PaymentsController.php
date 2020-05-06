<?php

namespace App\Http\Controllers;

use App\Notifications\PAymentReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class PaymentsController extends Controller
{
    public function create()
    {
       return view('payments.create');
    }

    public function store()
    {
        request()->user()->notify(new PAymentReceived(900));
        //Notification::send(request()->user(), new PAymentReceived()); //yukardaki ile aynı
    }
}
