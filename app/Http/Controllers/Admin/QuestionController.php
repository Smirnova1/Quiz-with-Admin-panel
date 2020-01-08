<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

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

    public function store(Request $request, Question $question)
    {
        $this->validate($request, [
            'text' => 'required|max:500',
        ]);

        $question::create($request->all());

        return redirect('admin/questions')->with('success', 'Question added!');
    }

    public function edit(Question $question)
    {
        return view('admin/questions/edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        $this->validate($request, [
            'text' => 'required|max:500',
        ]);
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
