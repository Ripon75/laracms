<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function index()
    {
        $defaultPaginate = config('crud.paginate.size');
        $allCategory = Category::paginate($defaultPaginate);

        return Inertia::render('Category/Index', [
            'allCategory' => $allCategory
        ]);
    }

    public function create()
    {
        return Inertia::render('Category/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'display_name' => 'required',
            'status' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->display_name = $request->display_name;
        $category->status = $request->status;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);

        return Inertia::render('Category/Show', [
            'category' => $category
        ]);
    }

    public function edit($id)
    {
        $category = Category::findOrfail($id);

        return Inertia::render('Category/Edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'display_name' => 'required',
            'status' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->display_name = $request->display_name;
        $category->status = $request->status;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        return "Destroy";
    }
}
