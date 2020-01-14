<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\OptionHelper;
use App\Http\Requests\QuestionRequest;
use App\Http\Requests\QuestionStore;
use App\Models\Option;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::orderByDesc('created_at')->paginate(5);

        return view('admin/questions/index', compact('questions'));
    }

    public function create()
    {
        return view('admin/questions/create');
    }

    public function store(QuestionStore $request)
    {
//        dd($request->all());
        if ($request->type == 'radio' && OptionHelper::checkRadioOption($request->input('is_correct'))) {
            return back()->with('error', 'This type of question can contain one correct answer!');
        }
        $question = Question::create($request->all());
        foreach ($request->input('options') as $key => $value) {
            Option::create([
                'question_id' => $question->id,
                'text' => $value,
                'is_correct' => $request->input('is_correct')[$key]
            ]);
        }

        return redirect('admin/questions')->with('success', 'Question added!');
    }

    public function edit(Question $question)
    {
        return view('admin/questions/edit', compact('question'));
    }

    public function update(QuestionRequest $request, Question $question)
    {
        if ($request->type == 'radio' && OptionHelper::checkRadioOption($request->input('is_correct'))) {
            return back()->with('error', 'This type of question can contain one correct answer!');
        }
        if ($request->input('optionsForRemove') && !empty($request->input('optionsForRemove'))) {
            foreach ($request->input('optionsForRemove') as $key => $value) {
                Option::where('id', $value)->delete();
            }
        }
        $question->update($request->all());
        foreach ($request->input('option_id') as $key => $value) {
            if (!$value) {
                Option::create([
                    'question_id' => $question->id,
                    'text' => $request->input('options')[$key],
                    'is_correct' => $request->input('is_correct')[$key]
                ]);
            } else {
                Option::where('id', $value)->update([
                    'question_id' => $question->id,
                    'text' => $request->input('options')[$key],
                    'is_correct' => $request->input('is_correct')[$key]
                ]);
            }
        }
        return redirect('admin/questions')->with('success', 'Question updated!');
    }

    public function show(Question $question)
    {
        return view('admin/questions/show', compact('question'));
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return redirect('admin/questions')->with('success', 'Question deleted!');
    }
}
