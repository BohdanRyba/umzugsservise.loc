<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'posts-create',
            'posts-list',
            'posts-show',
            'posts-update',
            'posts-edit',
            'posts-delete',
            'users-create',
            'users-list',
            'users-show',
            'users-update',
            'users-edit',
            'users-delete',
            'roles-create',
            'roles-list',
            'roles-show',
            'roles-update',
            'roles-edit',
            'roles-delete',
            'perms-create',
            'perms-list',
            'perms-show',
            'perms-update',
            'perms-edit',
            'perms-delete',
        ];

        $perms_id = [];
        foreach ($permissions as $permission) {
            $perms_id[] = Permission::create(['name' => $permission]);
        }
        $admin = Role::create(['name' => 'Admin']);
        $admin->syncPermissions($perms_id);
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('secret')
        ]);
        $user->assignRole($admin);
        Role::create(['name' => 'Partner']);
        Role::create(['name' => 'User']);

    }
}
