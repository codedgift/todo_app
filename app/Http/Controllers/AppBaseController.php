<?php

namespace App\Http\Controllers;

use App\Traits\ResponseCodeTrait;
use App\Utilities\GeneralConstants;
use App\Http\Controllers\Controller;

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


/**
 * @param int $length
 * @param bool $numeric
 * @return string
 */
function randomString(int $length = 32, bool $numeric = false): string
{

    $random_string = "";
    while(strlen($random_string)<$length && $length > 0) {
        if($numeric === false) {
            $random = mt_rand(0,61);
            $random_string .= ($random < 10) ?
                chr($random+48) : ($random < 36 ?
                    chr($random+55) : $random+61);
        } else {
            $random = mt_rand(0,9);
            $random_string .= chr($random+48);
        }
    }
    return $random_string;
}

}
