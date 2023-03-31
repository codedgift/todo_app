<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;


/**
 * @param $format
 * @param $time
 * @return Carbon\Carbon
 */
function carbonFromFormat($format, $time): \Carbon\Carbon
{
    return Carbon\Carbon::createFromFormat(explode(".",$format)[0], explode(".",$time)[0]);
}
