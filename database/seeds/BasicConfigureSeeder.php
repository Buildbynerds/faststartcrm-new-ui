<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BasicConfigureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = \Spatie\Permission\Models\Role::create([
            'name' => 'Admin',
            'guard_name' => 'web'
        ]);

        $permissions = \Spatie\Permission\Models\Permission::all();
        foreach ($permissions as $permission){
            DB::table('role_has_permissions')->insert([
                'permission_id' => $permission->id,
                'role_id' => $role->id,
            ]);
        }
    }
}
