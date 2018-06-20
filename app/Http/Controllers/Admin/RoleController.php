<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Role\RoleCreateRequest;
use App\Http\Requests\Admin\Role\RoleUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends AdminController
{
    public function __construct()
    {
        parent::__construct();

        $this->middleware('permission:roles-list');
        $this->middleware('permission:roles-show', ['only' => ['show']]);
        $this->middleware('permission:roles-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:roles-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:roles-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $categories = $this->adminCategories;

        $roles = Role::orderBy('id', 'DESC')->paginate(5);
        return view('admin.roles.index', compact('roles', 'categories'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $categories = $this->adminCategories;

        $permission = Permission::get();
        return view('admin.roles.create', compact('permission', 'categories'));
    }

    public function store(RoleCreateRequest $request)
    {
        Role::create(['name' => $request->name])
            ->syncPermissions($request->permission);
        return redirect()->route('roles.index')
            ->with('success', 'Role created successfully');
    }

    public function show($id)
    {
        $categories = $this->adminCategories;

        $role = Role::find($id);
        $rolePermissions = Permission::join(
            "role_has_permissions",
            "role_has_permissions.permission_id",
            "=",
            "permissions.id")
            ->where("role_has_permissions.role_id", $id)
            ->get();


        return view('admin.roles.show', compact('role', 'rolePermissions', 'categories'));
    }


    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        $categories = $this->adminCategories;

        return view('admin.roles.edit', compact('role', 'permission', 'rolePermissions', 'categories'));
    }

    public function update(RoleUpdateRequest $request, $id)
    {


        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();


        $role->syncPermissions($request->input('permission'));


        return redirect()->route('roles.index')
            ->with('success', 'Role updated successfully');
    }

    public function destroy($id)
    {
        DB::table("roles")->where('id', $id)->delete();
        return redirect()->route('roles.index')
            ->with('success', 'Role deleted successfully');
    }
}
