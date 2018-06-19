<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\NavCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{


    public function index(Request $request)
    {
        $projects = NavMenuController::$a;
        return view('admin.dashboard', compact('projects'));
    }

    public function login(Request $request)
    {
        return view('admin.auth.login');
    }
}
