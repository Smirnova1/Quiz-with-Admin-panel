<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionStore extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'text' => 'required|max:200',
            'type' => 'required',
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
