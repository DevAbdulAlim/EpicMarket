<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminRole;
use App\Models\AdminPermission;
use App\Models\AdminUser;

class AdminRolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $superAdminRole = AdminRole::create(['name' => 'super_admin']);
        $visitorRole = AdminRole::create(['name' => 'visitor']);

        // Create permissions for Super Admin with full access (wildcard routes and any method)
        $fullAccessPermission = AdminPermission::create([
            'name' => 'full_access',
            'routes' => ['/admin/*'],  // Access to all admin routes
            'methods' => ['any']       // Allow any HTTP method
        ]);

        // Create permissions for Visitor with access to all routes but only GET requests
        $viewAllPermission = AdminPermission::create([
            'name' => 'view_all',
            'routes' => ['/admin/*'],  // Access to all admin routes
            'methods' => ['GET']       // Allow only GET method
        ]);

        // Assign permissions to roles
        $superAdminRole->permissions()->attach($fullAccessPermission->id);
        $visitorRole->permissions()->attach($viewAllPermission->id);

        // Create a Super Admin User
        $superAdminUser = AdminUser::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('password'),  // Change to a secure password
            'profile_image' => null,
            'is_active' => true,
        ]);

        // Create a Visitor User
        $visitorUser = AdminUser::create([
            'name' => 'Visitor',
            'email' => 'visitor@example.com',
            'password' => bcrypt('password'),  // Change to a secure password
            'profile_image' => null,
            'is_active' => true,
        ]);

        // Assign roles to users
        $superAdminUser->roles()->attach($superAdminRole->id);
        $visitorUser->roles()->attach($visitorRole->id);
    }
}
