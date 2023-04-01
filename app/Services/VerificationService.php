<?php

namespace App\Services;

use App\Http\Controllers\AppBaseController;
use App\Models\User;
use App\Utilities\GeneralConstants;
use Illuminate\Http\Request;
use App\Http\Controllers\SendMailController;
use Illuminate\Support\Facades\Log;

class VerificationService extends AppBaseController
{

    public function verifyAccount(Request $request)
    {
        $user = User::where('email', $request['email'])->first();

        if (!$user) {
            $error = "User email does not exist!";
            $message = "Email Does Not Exist!";

            return $this->errorResponse($error, GeneralConstants::ERROR_TEXT, $message);
        }

        if (password_verify($request['confirmation_code'], $user['confirmation_code'])) {

            // Update Users model
            User::where('email',  $request['email'])->update(['confirmation_code' => null, 'email_verified_at'=>now()]);

            // Send Welcome Message
            SendMailController::sendWelcomeMail($user);
            Log::info('Email Verified Successfully');

            $message = "Email Verified Successfully";
            return $this->successResponse('Account Verification',GeneralConstants::SUCCESS_TEXT, $message, $message);

        } else {
            $error = "Invalid Confirmation Code";
            $message = "Invalid Confirmation Code";

            return $this->errorResponse($error, GeneralConstants::ERROR_TEXT, $message);
        }

    }
}
