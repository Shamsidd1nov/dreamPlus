<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
 
    public function index()
    {
        $post = post::get();
        return view('admin.allpost',['posts'=>$post]);
    }

    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $posts = Post::create([
            'user_id'=> auth()->user()->id,
            'icon' => $request->icon,
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('admin.edit',['posts'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $input = $request->all();
        $post->update($input);
        return redirect('admin')->with('flash_message', 'Contact Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('admin')->with('flash_message', 'Contact deleted!');
    }
}
