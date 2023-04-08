<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller


{
    public function showCategories() {
        $categories = Category::all();
        return view('admin.category.show_categories', compact('categories'));
    }

    public function showAddCategory () {

        return view('admin.category.add-category');
    }



    public function addCategory(CategoryRequest $request)
    {
        $category = new Category;
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->name);

        $category->save();

        return redirect()->route('show-categories')->with('success', 'Нову категорію збережено');

    }

    public function showEditCategory ($id) {

        $category = Category::find($id);
        return view('admin.category.edit-category', compact('category'));
    }

    public function updateCategory($id, CategoryRequest $request)
    {

        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->name);

        $category->save();

        return redirect()->route('show-categories', $id)->with('success', 'Зміни збережені');

    }

    public function deleteCategory($id)
    {

        Category::find($id)->delete();

        return back();

    }
}
