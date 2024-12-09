<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create an admin record
        Admin::create([
            'name' => 'Admin Name', // Replace with desired name
            'email' => 'admin@example.com', // Replace with desired email
            'password' => Hash::make('password'), // Replace with desired password
        ]);

        // Alternatively, you can create multiple admin records using a factory
        // Admin::factory()->count(5)->create(); // This creates 5 dummy admin users
    }
}
