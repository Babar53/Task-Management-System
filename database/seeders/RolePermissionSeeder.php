<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $permissions =
        [
            ['id' =>1, 'name' => 'role-list', 'guard_name' => 'web'],
            ['id' =>2 ,'name' => 'role-create', 'guard_name' => 'web'],
            ['id' =>3 ,'name' => 'role-edit', 'guard_name' => 'web'],
            ['id' =>4 ,'name' => 'role-delete', 'guard_name' => 'web'],

            ['id' =>1, 'name' => 'user-list', 'guard_name' => 'web'],
            ['id' =>2 ,'name' => 'user-create', 'guard_name' => 'web'],
            ['id' =>3 ,'name' => 'user-edit', 'guard_name' => 'web'],
            ['id' =>4 ,'name' => 'user-delete', 'guard_name' => 'web'],
        ];
    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::create([
                'name' => $permission['name'],
                'guard_name' => $permission['guard_name']
            ]);
        }

        $user = User::where('email', 'muhammadbabar@yumyapps.com')->first();

        Role::create(['name' => 'Admin', 'guard_name' => 'web']);
        Role::create(['name' => 'Manager', 'guard_name' => 'web']);
        Role::create(['name' => 'Member Team', 'guard_name' => 'web']);

        $adminRole = Role::where('name', 'Admin')->first();
        if ($adminRole) {
            $user = User::where('email', 'muhammadbabar@yumyapps.com')->first();
            $user->assignRole([$adminRole->id]);
            $permissions = Permission::pluck('id', 'id')->all();
            $adminRole->syncPermissions($permissions);
        }
    }
}
