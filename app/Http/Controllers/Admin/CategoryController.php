<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public $locales = [];

    public function __construct()
    {
        $this->locales = config('translatable.locales_named');
    }

    public function index(Request $request)
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);
        $locales = $this->locales;
        return view('admin.categories.index', compact('categories', 'locales'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        $locales = $this->locales;
        return view('admin.categories.create', compact('locales'));
    }

    public function store(Request $request)
    {
        dd($request);
        $locales = $this->locales;
        return view('admin.categories.create', compact('locales'));
    }
}
