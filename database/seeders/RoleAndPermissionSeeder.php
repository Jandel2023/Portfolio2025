<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Create or get permissions
        $viewall = Permission::firstOrCreate(['name' => 'viewall']);
        $edittestimonials = Permission::firstOrCreate(['name' => 'edittestimonials']);

        // Create or get roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $spectatorRole = Role::firstOrCreate(['name' => 'spectator']);

        // Assign permissions to roles
        $adminRole->givePermissionTo([$viewall, $edittestimonials]);
        $spectatorRole->givePermissionTo($viewall);
    }
}
