<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index(Topic $topic)
    {
        $topics = $topic::all();

        return view('admin/topics/index', compact('topics'));
    }

    public function create()
    {
        return view('admin/topics/create');
    }

    public function store(Request $request, Topic $topic)
    {
        $this->validate($request, [
            'name' => 'required|max:90',
        ]);

        $topic::create($request->all());

        return redirect('admin/topics')->with('success', 'Topic added!');
    }

    public function edit(Topic $topic)
    {
        return view('admin/topics/edit', compact('topic'));
    }

    public function update(Request $request, Topic $topic)
    {
        $this->validate($request, [
            'name' => 'required|max:90',
        ]);
        $topic->categories()->sync($request->category_id);
        $topic->questions()->sync($request->question_id);
        $topic->update($request->all());

        return redirect('admin/topics')->with('success', 'Topic updated!');
    }

    public function show(Topic $topic)
    {
        return view('admin/topics/show', compact('topic'));
    }

    public function destroy(Topic $topic)
    {
        $topic->delete();

        return redirect('admin/topics')->with('success', 'Topic deleted!');
    }
}
