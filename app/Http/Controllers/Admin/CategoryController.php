<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\CategoryCreateRequest;
use App\Http\Requests\Admin\Category\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends AdminController
{

    public $locales = [];

    public $statuses = [];

    public function __construct()
    {
        parent::__construct();

        $this->locales = config('translatable.locales_named');

        $this->statuses = Category::getStatuses();
    }

    public function index(Request $request)
    {
        $categories = $this->adminCategories;

        $postCategories = Category::orderBy('id', 'desc')->paginate(10);

        return view('admin.categories.index', compact('categories', 'postCategories'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        $categories = $this->adminCategories;

        $locales = $this->locales;
        $statuses = $this->statuses;
        return view('admin.categories.create', compact('locales', 'statuses', 'categories'));
    }

    public function createCategory(Request $request)
    {
        return Category::create([
            'alias' => Str::slug($request->input('en-name','_')),
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

    public function store(CategoryCreateRequest $request)
    {
        $category = $this->createCategory($request);
        $this->setTranslation($category, $request);
        return redirect(adminLocaleLink('/categories'))->with('success', 'Category was created successfuly');
    }

    public function show(Category $category)
    {
        $categories = $this->adminCategories;

        return view('admin.categories.show', compact('category', 'categories'));
    }

    public function edit(Category $category)
    {
        $categories = $this->adminCategories;

        $locales = $this->locales;
        $statuses = $this->statuses;
        return view('admin.categories.edit', compact('locales', 'statuses', 'category', 'categories'));
    }

    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->status = $request->input('status') ? $request->input('status') : Category::STATUS_PROCESSING;
        $this->setTranslation($category, $request);
        return redirect(adminLocaleLink('/categories'))->with('success', 'Category was updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(adminLocaleLink('/categories'))->with('success', 'Category was deleted successfully');
    }

}
