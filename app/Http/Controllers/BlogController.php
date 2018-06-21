<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($locale)
    {
        $categories = Category::all();
        $posts = Post::where('status', '=', Post::STATUS_PUBLISHED)->with(['attachments'])->orderBy('id', 'desc')->paginate(1);
        return view('blog.index', compact('posts', 'categories'));
    }
    public function show($id)
    {

        $post = Post::with(['attachments'])->find($id);
//        $posts = Post::where('status', '=', Post::STATUS_PUBLISHED)->orderBy('id', 'desc')->paginate('8');
//        dd($categories = $post->categories);
        return view('blog.blog-item', compact('post'));
    }
}
