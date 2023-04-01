<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\AppBaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\VerificationRequest;
use App\Services\VerificationService;
use Illuminate\Http\Request;

class VerificationController extends AppBaseController
{
    //

    public $verificationService;

    public function __construct(VerificationService $verificationService)
    {
        $this->verificationService = $verificationService;
    }

    public function verifyEmail(VerificationRequest $request)
    {
        return $this->verificationService->verifyAccount($request);
    }
}
