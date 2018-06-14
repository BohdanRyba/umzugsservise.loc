<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreatePermissionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableNames = config('permission.table_names');

        Schema::create($tableNames['permissions'], function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('guard_name');
            $table->timestamps();
        });

        Schema::create($tableNames['roles'], function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('guard_name');
            $table->timestamps();
        });

        Schema::create($tableNames['model_has_permissions'], function (Blueprint $table) use ($tableNames) {
            $table->unsignedInteger('permission_id');
            $table->morphs('model');

            $table->foreign('permission_id')
                ->references('id')
                ->on($tableNames['permissions'])
                ->onDelete('cascade');

            $table->primary(['permission_id', 'model_id', 'model_type'], 'model_has_permissions_permission_model_type_primary');
        });

        Schema::create($tableNames['model_has_roles'], function (Blueprint $table) use ($tableNames) {
            $table->unsignedInteger('role_id');
            $table->morphs('model');

            $table->foreign('role_id')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->primary(['role_id', 'model_id', 'model_type']);
        });

        Schema::create($tableNames['role_has_permissions'], function (Blueprint $table) use ($tableNames) {
            $table->unsignedInteger('permission_id');
            $table->unsignedInteger('role_id');

            $table->foreign('permission_id')
                ->references('id')
                ->on($tableNames['permissions'])
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->primary(['permission_id', 'role_id']);

            app('cache')->forget('spatie.permission.cache');
        });
    }

    public function permissions()
    {

        Permission::create(['name' => 'posts-create']);
        Permission::create(['name' => 'posts-list']);
        Permission::create(['name' => 'posts-show']);
        Permission::create(['name' => 'posts-update']);
        Permission::create(['name' => 'posts-edit']);
        Permission::create(['name' => 'posts-delete']);
        Permission::create(['name' => 'users-create']);
        Permission::create(['name' => 'users-list']);
        Permission::create(['name' => 'users-show']);
        Permission::create(['name' => 'users-update']);
        Permission::create(['name' => 'users-edit']);
        Permission::create(['name' => 'users-delete']);
        Permission::create(['name' => 'roles-create']);
        Permission::create(['name' => 'roles-list']);
        Permission::create(['name' => 'roles-show']);
        Permission::create(['name' => 'roles-update']);
        Permission::create(['name' => 'roles-edit']);
        Permission::create(['name' => 'roles-delete']);
        Permission::create(['name' => 'perms-create']);
        Permission::create(['name' => 'perms-list']);
        Permission::create(['name' => 'perms-show']);
        Permission::create(['name' => 'perms-update']);
        Permission::create(['name' => 'perms-edit']);
        Permission::create(['name' => 'perms-delete']);
    }

    public function roles()
    {
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Partner']);
        Role::create(['name' => 'User']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tableNames = config('permission.table_names');

        Schema::drop($tableNames['role_has_permissions']);
        Schema::drop($tableNames['model_has_roles']);
        Schema::drop($tableNames['model_has_permissions']);
        Schema::drop($tableNames['roles']);
        Schema::drop($tableNames['permissions']);
    }
}
