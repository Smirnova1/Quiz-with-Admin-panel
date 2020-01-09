<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStore;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $categories = $category::all();

        return view('admin/categories/index', compact('categories'));
    }

    public function create()
    {
        return view('admin/categories/create');
    }

    public function store(CategoryStore $request, Category $category)
    {
        $category::create($request->all());

        return redirect('admin/categories')->with('success', 'Category added!');
    }

    public function edit(Category $category)
    {
        return view('admin/categories/edit', compact('category'));
    }

    public function update(CategoryStore $request, Category $category)
    {
        $category->topics()->sync($request->topic_id);
        $category->update($request->all());

        return redirect('admin/categories')->with('success', 'Category updated!');
    }

    public function show(Category $category)
    {
        return view('admin/categories/show', compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('admin/categories')->with('success', 'Category deleted!');
    }

}
