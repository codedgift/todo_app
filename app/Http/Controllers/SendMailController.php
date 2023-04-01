<?php

namespace App\Http\Controllers;

use App\Mail\ActivationMail;
use App\Mail\WelcomeMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    //

    public static function sendActivationMail($user, $confirmation_code)
    {
        try{
            Mail::to($user['email'])->queue(new ActivationMail($user, $confirmation_code));
        } catch (Exception $e) {
            Log::info($e->getMessage());
        }

    }

    public static function sendWelcomeMail($user)
    {
        try{
            Mail::to($user['email'])->queue(new WelcomeMail($user));
        } catch (Exception $e) {
            Log::info($e->getMessage());
        }

    }
}
