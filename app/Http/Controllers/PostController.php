<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreatedMail;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function index()
    {
        $posts = post::orderBy('id', 'desc') -> paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        $post = post::create($request->all());

        Mail::to('prueba@gmail.com')->send(new PostCreatedMail ($post));

        return redirect()->route('posts.index');
    }

    public function show(post $post)
    {
        return view('posts.show', compact('post'));  /* Compact sirve para pasar la variable a la vista */
    }

    public function edit(post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, post $post)
    {
        $request->validate([
            'title' => ['required', 'min:5','max:255'],
            'slug' => "required|unique:posts,slug,{$post->id}",
            'category' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.show', $post);
    }

    public function destroy(post $post)
    {
        $post -> delete();

        return redirect()->route('posts.index');
    }
}
