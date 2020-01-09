<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\OptionHelper;
use App\Http\Requests\OptionStore;
use App\Http\Requests\OptionRequest;
use App\Models\Option;

class OptionController extends Controller
{
    public function index(Option $option)
    {
        $options = $option::all();

        return view('admin/options/index', compact('options'));
    }

    public function create()
    {
        return view('admin/options/create');
    }

    public function store(OptionStore $request, Option $option)
    {
        $option::create($request->all());

        return redirect('admin/options')->with('success', 'Option added!');
    }

    public function edit(Option $option)
    {
        return view('admin/options/edit', compact('option'));
    }

    public function update(OptionRequest $request, Option $option)
    {
        if (OptionHelper::checkRadioOption($request->question_id, $request->is_correct)) {
            return back()->with('error', 'This type of question can contain only one correct answer!');
        }

        $option->update($request->all());

        return redirect('admin/options')->with('success', 'Option updated!');
    }

    public function show(Option $option)
    {
        return view('admin/options/show', compact('option'));
    }

    public function destroy(Option $option)
    {
        $option->delete();

        return redirect('admin/options')->with('success', 'Option deleted!');
    }
}
