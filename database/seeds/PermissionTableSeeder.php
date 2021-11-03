<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

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
            'permissions-list',
            'permissions-create',
            'permissions-edit',
            'permissions-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'settings-list',
            'settings-create',
            'settings-edit',
            'settings-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'activity-log',
            'notification',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
