<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('backend.pages.category.manage', compact('categories'));
    }

    public function create()
    {
        return view('backend.pages.category.create');
    }

    public function store(Request $request)
    {
        $category              = new Category();
        $category->name        = $request->name;
        $category->slug        = Str::slug($request->name);
        $category->description = $request->description;
        $category->is_featured = $request->is_featured;
        $category->status      = $request->status;

        $notification = [
            'alert-type' => 'success',
            'message'    => 'New Category Added!',
        ];

        $category->save();
        return redirect()->route('category.manage')->with($notification);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        if (!is_null($category)) {
            return view('backend.pages.category.edit', compact('category'));
        } else {
            //404
        }
    }

    public function update(Request $request, $id)
    {
        $category              = Category::find($id);
        $category->name        = $request->name;
        $category->slug        = Str::slug($request->name);
        $category->description = $request->description;
        $category->is_featured = $request->is_featured;
        $category->status      = $request->status;

        $notification = [
            'alert-type' => 'success',
            'message'    => 'Category Updated Successfully!',
        ];

        $category->save();
        return redirect()->route('category.manage')->with($notification);
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if (!is_null($category)) {
            $notification = [
                'alert-type' => 'error',
                'message'    => 'Category Has Been Removed!',
            ];
            $category->delete();
            return redirect()->route('category.manage')->with($notification);
        } else {
            //404
        }
    }
}
