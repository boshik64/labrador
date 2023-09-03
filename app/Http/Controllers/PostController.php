<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();


        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer'
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer'
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function firstOrCreate()
    {
        $anotherPost =
            [
                'title' => 'first or creating post',
                'content' => 'another post',
                'image' => 'jpg',
                'likes' => '24'
            ];
        $post = Post::firstOrCreate([
            'title' => 'second creating post'
        ], $anotherPost);

        dd($post->title . ' ' . $post->id . ' finished');
    }

    public function updateOrCreate()
    {
        $anotherPost =
            [
                'title' => 'updated first or creating post',
                'content' => 'updated another post',
                'image' => 'updated jpg',
                'likes' => '24'
            ];
        $post = Post::updateOrCreate([
            'title' => 'new second creating post'
        ], $anotherPost);

        dd($post->title . ' ' . $post->id . ' finished');
    }

}
