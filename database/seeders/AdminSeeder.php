<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = \App\Models\User::where('email', 'jandellopez1997@gmail.com')->first();
        if (! $admin) {
            $admin = \App\Models\User::create([
                'name' => 'Jandel Lopez',
                'email' => 'jandellopez1997@gmail.com',
                'password' => bcrypt('jandel2025'),
            ]);
            $admin->assignRole('admin');
        }

        // Ensure the admin has the necessary permissions
        $admin->givePermissionTo(['viewall', 'edittestimonials']);
    }
}
