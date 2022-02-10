<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        $defaultPaginate = config('crud.paginate.size');
        $allPost = Post::paginate($defaultPaginate);

        return Inertia::render('Post/Index', [
            'allPost' => $allPost
        ]);
    }

    public function create()
    {
        return Inertia::render('Post/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'content' => 'required',
            'short_content' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->short_content = $request->short_content;
        $post->save();

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return Inertia::render('Post/Show', [
            'post' => $post
        ]);
    }

    public function edit($id)
    {
        $post = Post::findOrfail($id);

        return Inertia::render('Post/Edit', [
            'post' => $post
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

            $checkSlug = Post::where('slug' ,$request->slug)
                         ->where('id', '!=' , $id)
                         ->first();

            if($checkSlug){
                return "Slug Name Already Exist";
            }

        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->short_content = $request->short_content;
        $post->save();

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        return "destroy";
    }
}
