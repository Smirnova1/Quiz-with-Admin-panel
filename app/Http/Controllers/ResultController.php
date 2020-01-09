<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Result;
use App\Models\UserOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $result = Result::create([
            'user_id' => Auth::user()->id,
            'topic_id' => $request->topic_id
        ]);

        foreach ($request->input('questions') as $key => $value) {
            $question = Question::find($key);
            UserOption::create([
                'result_id' => $result->id,
                'question' => $question->text,
                'user_option' => implode(', ', $value),
                'correct_option' => $question->getCorrectOptions()
            ]);
        }

        return redirect(action('ResultController@show', $result->id));
    }

    public function show(Result $result)
    {
        return view('results.show', compact('result'));
    }
}
