<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::asc('name')->get();
        return view('backend.pages.category.manage', compact('categories'));
    }

    public function create()
    {
        return view('backend.pages.category.create');
    }

    public function store(CategoryRequest $request, Category $category)
    {
        $category = Category::create($request->validated());

        $category->save();
        flash('success', 'New Category Added!');
        return redirect()->route('category.manage');
    }

    public function edit(Category $category)
    {
        $category = $category;
        return view('backend.pages.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category = $category;
        $category->update($request->validated());

        $category->save();
        flash('success', 'Category Updated Successfully!');
        return redirect()->route('category.manage');
    }

    public function destroy(Category $category)
    {
        $category     = $category;

        $category->delete();
        flash('error', 'Category Deleted Successfully');
        return redirect()->route('category.manage');

    }
}
