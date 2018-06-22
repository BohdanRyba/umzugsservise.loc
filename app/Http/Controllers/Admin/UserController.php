<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\User\UserCreateRequest;
use App\Http\Requests\Admin\User\UserUpdateRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends AdminController
{


    public function __construct()
    {
        parent::__construct();

        $this->middleware('permission:users-list');
        $this->middleware('permission:users-show', ['only' => ['show']]);
        $this->middleware('permission:users-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:users-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:users-delete', ['only' => ['destroy']]);

    }

    public function index(Request $request)
    {
        $categories = $this->adminCategories;
        $data = User::orderBy('id', 'DESC')->paginate(5);
        return view('admin.users.index', compact('data', 'categories'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $categories = $this->adminCategories;
        $roles = Role::pluck('name', 'name')->all();
        return view('admin.users.create', compact('roles', 'categories'));
    }


    public function store(UserCreateRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->name),
        ]);


        $user = $user->assignRole($request->input('roles'));


        return redirect(adminLocaleLink('/users'))
            ->with('success', 'User created successfully');
    }

    public function show($id)
    {
        $categories = $this->adminCategories;
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user', 'categories'));
    }


    public function edit($id)
    {
        $categories = $this->adminCategories;

        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();


        return view('admin.users.edit', compact('user', 'categories', 'roles', 'userRole'));
    }


    public function update(UserUpdateRequest $request, $id)
    {
        $this->validate($request, [
            'email' => 'email|unique:users,email,' . $id,
        ]);
        if (!empty($request->password)) {
            $request->password = Hash::make($request->password);
        } else {
            $request = array_except($request, ['password']);
        }


        $user = User::find($id);
        $user->update($request->all());
        DB::table('model_has_roles')->where('model_id', $id)->delete();


        $user->assignRole($request->input('roles'));


        return redirect(adminLocaleLink('/users'))
            ->with('success', 'User updated successfully');
    }


    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect(adminLocaleLink('/users'))
            ->with('success', 'User deleted successfully');
    }
}
