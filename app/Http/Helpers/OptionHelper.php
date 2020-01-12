<?php

namespace App\Http\Helpers;

use App\Models\Question;

class OptionHelper
{
    public static function checkRadioOption($array)
    {
        $i = 0;
        foreach ($array as $key => $value) {
            if ($value) {
                $i++;
            }
        }
        return boolval($i != 1);
    }
}