<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AsignRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleSuperadmin = Role::where('name', 'SUPERADMIN')->first();
        $roleAdmin = Role::where('name', 'ADMIN')->first();
        $roleUser = Role::where('name', 'USER')->first();


        $superadmin = User::find(1);
        $admin = User::find(2);
        $user = User::find(3);

        $superadmin->assignRole($roleSuperadmin);
        $admin->assignRole($roleAdmin);
        $user->assignRole($roleUser);
    }
}
