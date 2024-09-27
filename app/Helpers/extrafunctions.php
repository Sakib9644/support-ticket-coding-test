<?php

use App\Mail\TicketNotifcation;
use Illuminate\Support\Facades\Mail;

if (!function_exists('ticket')) {
    /**
     *
     * @return integer
     */
    function ticket($to,$message )
    {
        $user = auth()->user();
        $from = 'Netcoden@Netcoden.com';
        $name = $user->name;
        $messageBody = $message;

        $notification = "Notification from " . $name;

        $cc = 'Netcoden@Netcoden.com';;
    // dd($from,$to,$cc);
        Mail::to($to)
            ->cc($cc)
            ->send(new TicketNotifcation($from, $name, $messageBody, $notification));
    }
    }


