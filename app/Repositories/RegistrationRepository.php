<?php
namespace App\Repositories;

use App\Http\Controllers\AppBaseController;
use App\Models\User;
use Illuminate\Http\Request;
use App\Utilities\GeneralConstants;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Http\Controllers\SendMailController;

class RegistrationRepository extends AppBaseController
{

    /**
     * @param Request $request
     * @param $confirmation_code
     * @return mixed
     */
    public function create_user(Request $request, $confirmation_code)
    {
        try {
            $user = User::firstOrCreate(
                ['email' => $request['email']],
                [
                    'id' => Str::uuid(),
                    'firstname' => $request['firstname'],
                    'lastname' => $request['lastname'],
                    'email' => $request['email'],
                    'phone_number' => $request['phone_number'],
                    'password' => bcrypt($request['password']),
                    'confirmation_code' => bcrypt($confirmation_code)
                ]
            );

            Log::info('Registration Information inserted successfully ');

            //  Send Activation Email
            SendMailController::sendActivationMail($user, $confirmation_code);

            $message = "Registration Successful";
            return $this->successResponse($user,GeneralConstants::SUCCESS_TEXT, $message, $message);

        }catch (\Exception $e){
            $message = "Registration Data Insertion Error";
            Log::info($e->getMessage());
            return $this->errorResponse($e->getMessage(), GeneralConstants::ERROR_TEXT, $message);
        }

    }

}
