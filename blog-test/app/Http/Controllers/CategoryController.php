<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('admin.category.index');
    }

    public function store(Request $request)
    {
        // return $request;
        Category::saveCategory($request);
        return back()->with('message', "Category added successfully!");
    }

    public function manage()
    {
        return view('admin.category.manage', [
            'categories' => Category::all()
        ]);
    }

    public function edit()
    {
        return view('admin.category.edit');
    }
}
