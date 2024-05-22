<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function category()
    {
        $categories = Category::all();

        return view('admin.category', ['categories' => $categories]);
    }
    public function add_category(Request $request)
    {
        $category = new Category();
        $category->name = $request->category;
        $category->save();

        toastr()->timeOut(5000)->closeButton()->success('Category added successfully');

        return redirect()->route('admin.category');
    }
}
