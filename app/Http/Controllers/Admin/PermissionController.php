<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Permissions\PermissionsCreateRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends AdminController
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:perms-list', ['only' => ['index']]);
        $this->middleware('permission:perms-show', ['only' => ['show']]);
        $this->middleware('permission:perms-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:perms-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:perms-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $categories = $this->adminCategories;

        $permissions = Permission::orderBy('id', 'DESC')->paginate(5);
        return view('admin.permission.index', compact('permissions', 'categories'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $categories = $this->adminCategories;
        return view('admin.permission.create', compact('categories'));
    }

    public function store(PermissionsCreateRequest $request)
    {
        Permission::create(['name' => $request->name]);
        return redirect(adminLocaleLink('/perms'))
            ->with('success', 'Role created successfully');
    }

    public function show($id)
    {
        $categories = $this->adminCategories;
        $perm = Permission::findById($id);
        return view('admin.permission.show', compact('perm', 'categories'));
    }

    public function destroy(Permission $perm)
    {
        $perm->delete();

        return redirect(adminLocaleLink('/perms'))
            ->with('success', 'Permission was deleted successfully');
    }
}
