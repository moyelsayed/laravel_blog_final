<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


use App\Models\Post;
use App\Models\User;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog.index')
        ->with('posts',Post::get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',


        ]);
        $slug=Str::slug($request->title,'-');
        $newImageName = uniqid() . '-' . $slug . '-'. $request->image->extension();
        $request->image->move(public_path('images'),$newImageName);


        Post::create([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'slug'=> $slug,
            'image_path'=> $newImageName,
            'user_id'=> auth()->user()->id

        ]);

        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        return view('blog.show')
        ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        return view('blog.edit')
        ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $request->validate([

            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',


        ]);
        $slug=Str::slug($request->title,'-');
        $newImageName = uniqid() . '-' . $slug . '-'. $request->image->extension();
        $request->image->move(public_path('images'),$newImageName);

        Post::where('slug',$slug)
        ->update([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'slug'=> $slug,
            'image_path'=> $newImageName,
            'user_id'=> auth()->user()->id

        ]);

        return redirect('/blog/'.$slug)
        ->with('message','The Post Has been Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        Post::where('slug',$slug)->delete();

        return redirect('/blog')
        ->with('message','The Post Has been Deleted');
    }
}
