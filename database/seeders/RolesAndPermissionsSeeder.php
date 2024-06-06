<?php

// database/seeders/RolesAndPermissionsSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Check if the roles already exist before creating them
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Check if the permission already exists before creating it
        $permission = Permission::firstOrCreate(['name' => 'edit articles']);

        // Assign permissions to roles
        if (!$adminRole->hasPermissionTo($permission)) {
            $adminRole->givePermissionTo($permission);
        }

        // Find users and assign roles
        $admin = User::find(1); // Assuming user with ID 1 is admin
        if ($admin && !$admin->hasRole('admin')) {
            $admin->assignRole('admin');
        }

        $user = User::find(2); // Assuming user with ID 2 is a regular user
        if ($user && !$user->hasRole('user')) {
            $user->assignRole('user');
        }
    }
}
