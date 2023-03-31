<?php

namespace App\Http\Controllers;

use App\Traits\ResponseCodeTrait;
use App\Utilities\GeneralConstants;

class AppBaseController extends Controller
{
    use ResponseCodeTrait;
    //

    /**
     * @param $data
     * @param $resp_message
     * @param $resp_description
     * @param string $resp_code
     * @return mixed
     */
    public function successResponse($data, $resp_message, $resp_description)
    {
        return \Response::json([
            "resp_code" => GeneralConstants::SUCCESS_CODE,
            "resp_message" => $resp_message,
            "resp_description" => $resp_description,
            "data" => $data,
            "errors" => null
        ], self::$STATUS_CODE_DONE);
    }

    /**
     * @param $error
     * @param $resp_message
     * @param $resp_description
     * @param string $resp_code
     * @return mixed
     */
    public function errorResponse($error, $resp_message, $resp_description)
    {
        return \Response::json([
            "resp_code" => GeneralConstants::ERROR_CODE,
            "resp_message" => $resp_message ?? $error,
            "resp_description" => $resp_description ?? $error,
            "data" => null,
            "errors" => $error
        ], self::$STATUS_CODE_NOT_VALID);
    }

    /**
     * @return mixed
     */
    public static function generalError()
    {
        return (new self())->errorResponse(
            "An error occurred",
            GeneralConstants::ERROR_TEXT,
            GeneralConstants::ERROR_CODE,
            "An error occurred"
        );
    }
}
