<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends AdminController
{

    public $locales = [];

    public $statuses = [];

    public function __construct()
    {
        $this->locales = config('translatable.locales_named');

        $this->statuses = Category::getStatuses();
    }

    public function index(Request $request)
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);
        return view('admin.categories.index', compact('categories'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        $locales = $this->locales;
        $statuses = $this->statuses;
        return view('admin.categories.create', compact('locales', 'statuses'));
    }

    public function createCategory(Request $request)
    {
        return Category::create([
            'alias' => $request->input('alias'),
            'status' =>
                $request->input('status') ?
                    $request->input('status') :
                    Category::STATUS_PROCESSING
        ]);
    }

    public function setTranslation($category, $request)
    {
        foreach ($this->locales as $key => $locales) {
            $category->translateOrNew($key)->name = $request->input($key . '-name');
        }
        $category->save();

    }

    public function store(Request $request)
    {
        $category = $this->createCategory($request);
        $this->setTranslation($category, $request);
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        $locales = $this->locales;
        $statuses = $this->statuses;
        return view('admin.categories.edit', compact('locales', 'statuses', 'category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->status = $request->input('status') ? $request->input('status') : Category::STATUS_PROCESSING;
        $this->setTranslation($category, $request);
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }

}
