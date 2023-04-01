<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\RegistrationRequest;
use App\Services\RegistrationService;

class RegisterController extends AppBaseController
{
    /**
     * @var RegistrationService
     */
    public $registrationService;

    /**
     * @param RegistrationService $registrationService
     */
    public function __construct(RegistrationService $registrationService)
    {
        $this->middleware('guest');
        $this->registrationService = $registrationService;
    }

    /**
     * @param RegistrationRequest $request
     * @return mixed
     */
    public function register(RegistrationRequest $request)
    {
        return $this->registrationService->processRegistration($request);
    }


}
