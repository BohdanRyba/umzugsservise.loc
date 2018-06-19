<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\NavCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public $adminCategories = [];

    public function __construct()
    {
        $this->adminCategories = NavMenuController::$categories;
    }

    public function index(Request $request)
    {
        $categories = $this->adminCategories;
        return view('admin.dashboard', compact('categories'));
    }

    public function login(Request $request)
    {
        return view('admin.auth.login');
    }
}
