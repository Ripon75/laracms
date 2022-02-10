<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Inertia\Inertia;

class PageController extends Controller
{
    public function index()
    {
        $defaultPaginate = config('crud.paginate.size');
        $allPage = Page::paginate($defaultPaginate);

        return Inertia::render('Page/Index', [
            'allPage' => $allPage
        ]);
    }


    public function create()
    {
        return Inertia::render('Page/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:pages',
            'content' => 'required',
            'short_content' => 'required',
        ]);

        $page = new Page();
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->content = $request->content;
        $page->short_content = $request->short_content;
        $page->save();

        return redirect()->route('pages.index');
    }


    public function show($id)
    {
        $page = Page::findOrFail($id);

        return Inertia::render('Page/Show', [
            'page' => $page
        ]);
    }


    public function edit($id)
    {
        $page = Page::findOrfail($id);

        return Inertia::render('Page/Edit', [
            'page' => $page
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'short_content' => 'required',
        ]);

            $checkSlug = Page::where('slug' ,$request->slug)
                         ->where('id', '!=' , $id)
                         ->first();

            if($checkSlug){
                return "Slug Name Already Exist";
            }

        $page = Page::findOrFail($id);
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->content = $request->content;
        $page->short_content = $request->short_content;
        $page->save();

        return redirect()->route('pages.index');
    }

    public function destroy($id)
    {
        return "destroy";
    }
}
