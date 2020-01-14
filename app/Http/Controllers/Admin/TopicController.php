<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TopicRequest;
use App\Http\Requests\TopicStore;
use App\Models\Topic;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::orderByDesc('created_at')->paginate(5);

        return view('admin/topics/index', compact('topics'));
    }

    public function create()
    {
        return view('admin/topics/create');
    }

    public function store(TopicStore $request, Topic $topic)
    {
        $topic::create($request->all());

        return redirect('admin/topics')->with('success', 'Topic added!');
    }

    public function edit(Topic $topic)
    {
        return view('admin/topics/edit', compact('topic'));
    }

    public function update(TopicRequest $request, Topic $topic)
    {
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
