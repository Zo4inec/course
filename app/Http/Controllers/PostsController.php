<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::published()->latest()->get();

        return view('home', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $attr = request()->validate([
            'slug'    => 'required|unique:posts|regex:/[A-Za-z0-9_-]/',
            'title'   => 'required|min:5|max:100',
            'excerpt' => 'required|max:255',
            'body'    => 'required',
        ]);
        if (request('published')) {
            $attr['published'] = true;
        }

        Post::create($attr);

        return redirect('/');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
