<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Category Read
    public function index()
    {
        $categories = Category::all();
        return view('backend.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.categories.create');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();
            Category::create($data);
            return redirect()->route('category.index')->withSuccess('Category Insert Successfully Done');

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        Category::where('id', $id)->update($data);
        return redirect()->route('category.index')->withSuccess('Category Updated Successfully Done');
    }
}