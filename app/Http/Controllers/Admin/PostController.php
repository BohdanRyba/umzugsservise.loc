<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostAttachments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends AdminController
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
        $posts = Post::with('attachments')->orderBy('id', 'desc')->paginate(5);
        return view('admin.blog.index', compact('posts'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        $categories = Category::all();
        $locales = $this->locales;
        $statuses = $this->statuses;
        return view('admin.blog.create', compact('locales', 'statuses', 'categories'));
    }

    public function newPost(Request $request)
    {
        $user = Auth::user();
        $post = $user->posts()->create([
            'status' => $request->input('status') ? $request->input('status') : Post::STATUS_PROCESSING,
        ]);
        $post->categories()->attach($request->input('categories'));
        $this->uploadImage($request, $post);
        $this->setTranslations($post, $request);
        return $post;
    }

    public function uploadImage(Request $request, $post)
    {
        if ($request->hasFile('post_img')) {
            $file = $request->file('post_img');
            $fileName = $file->getClientOriginalName();
            $fileSize = $file->getSize();
            $fileExtension = $file->getClientOriginalExtension();
            $fileMime = $file->getClientMimeType();
            $image = new \App\Models\PostAttachments([
                'post_id' => $post->id,
                'fileExtension' => $fileExtension,
                'fileName' => $fileName,
                'fileMime' => $fileMime,
                'fileSize' => $fileSize,
                'filePath' => 'public/storage/blog/' . $fileExtension . '/' . Storage::disk('blog_' . $fileExtension)
                        ->put('', $file)
            ]);
            $image->save();
        } else {
            return;
        }
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
