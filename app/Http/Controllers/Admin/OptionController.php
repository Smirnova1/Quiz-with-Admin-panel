<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;

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

    public function store(Request $request, Option $option)
    {
        $this->validate($request, [
            'text' => 'required|max:500',
        ]);

        $option::create($request->all());

        return redirect('admin/options')->with('success', 'Option added!');
    }

    public function edit(Option $option)
    {
        return view('admin/options/edit', compact('option'));
    }

    public function update(Request $request, Option $option)
    {
        $this->validate($request, [
            'text' => 'required|max:500',
            'is_correct' => 'required',
            'question_id' => 'required'
        ]);
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
