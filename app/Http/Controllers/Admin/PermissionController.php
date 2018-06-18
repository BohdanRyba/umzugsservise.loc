<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends AdminController
{

    public function __construct()
    {
        $this->middleware('permission:perms-list', ['only' => ['index']]);
        $this->middleware('permission:perms-show', ['only' => ['show']]);
        $this->middleware('permission:perms-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:perms-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:perms-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request)
    {
        $permissions = Permission::orderBy('id', 'DESC')->paginate(5);
        return view('admin.permission.index', compact('permissions'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.permission.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
        ]);


        $role = Permission::create(['name' => $request->input('name')]);


        return redirect()->route('perms.index')
            ->with('success', 'Role created successfully');
    }

    public function show($id)
    {
        $perm = Permission::findById($id);
        return view('admin.permission.show', compact('perm'));
    }


    public function destroy($id)
    {
        $perm = Permission::findById($id);
        $perm->delete();
        return redirect()->route('perms.index');
    }
}
