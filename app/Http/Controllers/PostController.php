<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PostController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('admin', except: ['index']),
        ];
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image_path' => 'required'
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image_path = $request->image_path;
        $post->save();
        return redirect()->route('posts.index');
    }

    public function edit($id){
        $posts = Post::find($id);
        return view('posts.edit', compact('posts'));
    }

    public function update($id, Request $request){
        $post = Post::find($id);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image_path' => 'required'
        ]);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->image_path = $request->image_path;
        $post->save();
        return redirect()->route('posts.index');
    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
