<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionStore;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index(Question $question)
    {
        $questions = $question::all();

        return view('admin/questions/index', compact('questions'));
    }

    public function create()
    {
        return view('admin/questions/create');
    }

    public function store(QuestionStore $request, Question $question)
    {
        $question::create($request->all());

        return redirect('admin/questions')->with('success', 'Question added!');
    }

    public function edit(Question $question)
    {
        return view('admin/questions/edit', compact('question'));
    }

    public function update(QuestionStore $request, Question $question)
    {
        $question->update($request->all());

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
