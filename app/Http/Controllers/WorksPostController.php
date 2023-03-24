<?php

namespace App\Http\Controllers;

use App\Models\work;
use Illuminate\Http\Request;

class WorksPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = work::get();
        return view('admin.work.allpost',['posts'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.work.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $posts = work::create([
            'image' => $request->img,
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect('work/create');
        // return redirect()->route('admin.work.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
