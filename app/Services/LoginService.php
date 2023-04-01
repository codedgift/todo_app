<?php
namespace App\Services;

use App\Http\Controllers\AppBaseController;
use App\Models\User;
use App\Repositories\LoginRepository;
use App\Utilities\GeneralConstants;
use Illuminate\Http\Request;

class LoginService extends AppBaseController
{
    /**
     * @var LoginRepository
     */
    public $loginRepository;

    /**
     * @param LoginRepository $loginRepository
     */
    public function __construct(LoginRepository $loginRepository)
    {
        $this->loginRepository = $loginRepository;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function processLogin(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        if ($this->loginRepository->emailVerificationCheck($request) == NULL) {

            $error = "Unverified Account";
            $message = "You're yet to verify your account, kindly check your mail box to activate your account!";

            return $this->errorResponse($error, GeneralConstants::ERROR_TEXT, $message);

        } else {

            $credentials = $request->only(['email', 'password']);

            if (!$token = auth('api')->attempt($credentials)) {
                $error = "Incorrect email or password!";
                $message = "Incorrect email or password!";

                return $this->errorResponse($error, GeneralConstants::ERROR_TEXT, $message);
            }

            $data = [
                'user' => $user,
                'token' => $token,
                'expires' => auth('api')->factory()->getTTL() * 60,
            ];

            $message = "Login Successful";
            return $this->successResponse($data, GeneralConstants::SUCCESS_TEXT, $message, $message);

        }

    }

}
