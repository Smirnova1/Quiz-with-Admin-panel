<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'text' => 'required|max:200',
            'type' => 'required',
            'option_id' => 'required',
            'options' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'options.required' => 'Please add an answer option.',
        ];
    }
}
