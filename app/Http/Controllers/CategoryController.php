<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Str;


class CategoryController extends Controller
{

    public function showCategories() {
        $categories = Category::all();
        return view('admin.category.show_categories', compact('categories'));
    }

    public function showAddCategory () {

        return view('add-category');
    }

    public function addCategory(CategoryRequest $request)
    {
        $category = new Category;
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->name);

        $category->save();

        return redirect()->back();

    }

    public function updateCategory($id, CategoryRequest $request)
    {

        $category = Category::find($id);
        $category->title = $request->input('title');
        $category->slug = $request->input('slug');

        $category->save();

        return redirect()->route('service', $id);

    }

    public function deleteCategory($id)
    {
        CategoryRequest::find($id)->delete();

        return back();

    }




}
