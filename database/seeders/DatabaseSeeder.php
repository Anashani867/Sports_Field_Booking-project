<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\PaymentsTableSeeder;
use Illuminate\Database\BookingsTableSeeder;
use Illuminate\Database\UsersTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UsersTableSeeder::class, // Ensure users are seeded
            BookingsTableSeeder::class, // Ensure bookings are seeded
            PaymentsTableSeeder::class, // Add payments
        ]);

    }
}
