<?php
namespace App\Repositories;

use App\Http\Controllers\AppBaseController;
use App\Models\User;

class LoginRepository extends AppBaseController
{
    /**
     * @param $request
     * @return mixed
     */
    public function emailVerificationCheck($request)
    {
        return User::where('email', $request['email'])->whereNull('confirmation_code')->first();
    }
}
