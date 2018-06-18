<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', '', Post::STATUS_PUBLISHED)->orderBy('id', 'desc')->paginate('8');
        return view('blog.index',compact('posts'));
    }
}