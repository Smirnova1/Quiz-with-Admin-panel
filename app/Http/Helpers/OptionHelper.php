<?php

namespace App\Http\Helpers;

use App\Models\Question;

class OptionHelper
{
    public static function checkRadioOption($id, $value)
    {
        $question = Question::find($id);
        if ($question->type == 'radio' && $question->hasCorrectAnswer() && $value) {
            return true;
        }

        return false;
    }
}