<?php

use App\User;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    public function run()
    {
        // Assign Admin role to User ID 1
        $admin = User::findOrFail(1);
        $admin->roles()->sync([1]); // Admin role ID

        // Assign User role to User ID 2
        $user = User::findOrFail(2);
        $user->roles()->sync([2]); // User role ID
    }
}
