<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{


    public function __construct()
    {
        $this->middleware('permission:posts-list');
        $this->middleware('permission:posts-show', ['only' => ['show']]);
        $this->middleware('permission:posts-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:posts-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:posts-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $posts = Post::orderBy('id','desc')->paginate(5);
        return view('admin.blog.index', compact('posts'))->with('i', ($request->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('admin.blog.create', compact('posts'));
    }


    public function store(Request $request)
    {
        $user = Auth::user();
        $post = $user->posts()->create([
            'status' => $request->input('status'),
        ]);
//        dd($request->input('title'));
        foreach (['en', 'de', 'ru'] as $locale) {
            $post->translateOrNew($locale)->title = $request->input('title');
            $post->translateOrNew($locale)->description = $request->input('description');
            $post->translateOrNew($locale)->content = $request->input('content');
        }
        $post->save();
        return redirect()->route('posts.index');
    }


    public function show(Post $post)
    {
        return view('admin.blog.show', compact('post'));
    }


    public function edit(Post $post)
    {
        return view('admin.blog.edit', compact('post'));

    }

    public function update(Request $request, Post $post)
    {
        $post->status = $request->input('status');
        foreach (['de', 'en', 'ru'] as $locales) {

            $post->translateOrNew($locales)->title = $request->input('title');
            $post->translateOrNew($locales)->description = $request->input('description');
            $post->translateOrNew($locales)->content = $request->input('content');
        }
        $post->save();
        return redirect()->route('posts.index');
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
