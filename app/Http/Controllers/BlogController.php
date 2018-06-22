<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', '=' , Category::STATUS_PUBLISHED)->get();
        $posts = Post::where('status', '=', Post::STATUS_PUBLISHED)->with(['attachments'])->orderBy('id', 'desc')->paginate(8);
        return view('blog.index', compact('posts', 'categories'));
    }

    public function show($id)
    {
        $post = Post::with(['attachments'])->find($id);

        return view('blog.blog-item', compact('post'));
    }

    public function showByCategory($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::where('status', '=' , Category::STATUS_PUBLISHED)->get();
        $posts = $category->posts()->where('status', '=', Post::STATUS_PUBLISHED)->with(['attachments'])->orderBy('id', 'desc')->paginate(8);
        return view('blog.index', compact('posts', 'categories'));
    }
}
