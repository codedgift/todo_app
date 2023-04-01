<?php
namespace App\Services;

use App\Http\Controllers\AppBaseController;
use App\Models\User;
use App\Repositories\RegistrationRepository;
use App\Utilities\GeneralConstants;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegistrationService extends AppBaseController
{

    /**
     * @var RegistrationRepository
     */
    protected $registrationRepository;

    /**
     * @param RegistrationRepository $registrationRepository
     */
    public function __construct(RegistrationRepository $registrationRepository)
    {
        $this->registrationRepository = $registrationRepository;
    }


    /**
     * @param Request $request
     * @return mixed
     */
    public function processRegistration(Request $request)
    {
        // Try to find a user with the specified email
        $user = User::where('email', $request['email'])->first();

        // If user already exists, return an error message
        if ($user) {
            $error = "User with email already exists";
            $message = "User Email Already exists error message";

            return $this->errorResponse($error, GeneralConstants::ERROR_TEXT, $message);
        }

        // Generate random confirmation code
        $confirmation_code = $this->randomString(6, true);

        return $this->registrationRepository->create_user($request, $confirmation_code);

    }

}
