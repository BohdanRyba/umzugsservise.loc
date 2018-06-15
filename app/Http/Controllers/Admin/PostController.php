<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public $locales = [];
    public $statuses = [];

    public function __construct()
    {
        $this->middleware('permission:posts-list');
        $this->middleware('permission:posts-show', ['only' => ['show']]);
        $this->middleware('permission:posts-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:posts-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:posts-delete', ['only' => ['destroy']]);


        $this->locales = config('translatable.locales_named');
        $this->statuses = Post::getStatuses();
    }

    public function index(Request $request)
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('admin.blog.index', compact('posts'))->with('i', ($request->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        $locales = $this->locales;
        $statuses = $this->statuses;
        return view('admin.blog.create', compact('locales', 'statuses'));
    }

    public function newPost($request)
    {
        $user = Auth::user();
        $post = $user->posts()->create([
            'status' => $request->input('status') ? $request->input('status') : Post::STATUS_PROCESSING,
        ]);
        $this->setTranslations($post, $request);
        return $post;
    }

    public function setTranslations($post, $request)
    {
        foreach ($this->locales as $key => $locales) {
            $post->translateOrNew($key)->title = $request->input($key . '-title');
            $post->translateOrNew($key)->description = $request->input($key . '-description');
            $post->translateOrNew($key)->content = $request->input($key . '-content');
        }
        $post->save();
    }

    public function store(Request $request)
    {
        $this->newPost($request);
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
        $post->status = $request->input('status') ? $request->input('status') : $this->statuses[0];

        foreach ($this->locales as $key => $locales) {
            $post->translateOrNew($key)->title = $request->innput($key . '-title');
            $post->translateOrNew($key)->description = $request->input($key . '-description');
            $post->translateOrNew($key)->content = $request->iput($key . '-content');
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
