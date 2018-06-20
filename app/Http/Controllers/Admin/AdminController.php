<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public $adminCategories = [];

    public function __construct()
    {
        $this->adminCategories = NavMenuController::$categories;
        $this->middleware('admin')->except(['login']);
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
