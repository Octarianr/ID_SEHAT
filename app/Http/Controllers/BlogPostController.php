<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts', [
            "posts" => BlogPost::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.postmenu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'max:255',
            'title' => 'required|max:255',
            'slug' => 'required|unique:blogs',
            'image' => 'file',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('images');
        }

        BlogPost::create($validatedData);

        return redirect('/posts')->with('success', 'Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        return view('admin.postmenu.show', [
            'post' => $blogPost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        return view('admin.postmenu.edit', [
            'post' => $blogPost
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'file',
            'body' => 'required'
        ];

        
        if ($request->slug != $blogPost->slug) {
            $rules[('slug')] = 'required|unique:blogs';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('images');
        }

        BlogPost::where('id', $blogPost->id)
            ->update($validatedData);

        return redirect('/posts')->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        if ($blogPost->image) {
            Storage::delete($blogPost->image);
        }

        BlogPost::destroy($blogPost->id);

        return redirect('/posts')->with('success', 'Deleted');
    }
}
