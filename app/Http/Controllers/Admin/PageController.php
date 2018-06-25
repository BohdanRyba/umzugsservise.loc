<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends AdminController
{


    public function index(Request $request)
    {
        $pages = Page::all();
        $categories = $this->adminCategories;
        return view('admin.pages.index', compact('categories', 'pages'));
    }

    public function create()
    {
        $categories = $this->adminCategories;
        return view('admin.pages.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, ['pagename' => 'required']);
        $page = new Page([
            'pagename' => $request->pagename
        ]);
        $page->save();
        return redirect(adminLocaleLink('/pages'))->with('success', 'Page was created successfully');
    }

    public function show(Page $page)
    {
        $categories = $this->adminCategories;
        return view('admin.pages.show', compact('categories', 'page'));
    }

    public function edit(Page $page)
    {
        $categories = $this->adminCategories;
        return view('admin.pages.edit', compact('categories', 'page'));
    }

    public function update(Request $request, Page $page)
    {
        $this->validate($request, ['pagename' => 'required']);
        $page->pagename = $request->pagename;
        $page->save();
        return redirect(adminLocaleLink('/pages'))->with('success', 'Page was updated successfully');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return redirect(adminLocaleLink('/pages'))->with('success', 'Page was deleted successfully');

    }
}
