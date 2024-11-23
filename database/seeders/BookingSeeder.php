<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inserting test data into the bookings table
        DB::table('bookings')->insert([
            [
                'field_id' => 1, // Assuming a field with ID 1 exists
                'customer_id' => 1, // Assuming a user with ID 1 exists
                'name' => 'Soccer Game',
                'field_name' => 'Soccer Field A',
                'date_time' => Carbon::now()->addDays(1)->toDateTimeString(),
                'status' => 'confirmed',
                'amount' => 100.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'field_id' => 2, // Assuming a field with ID 2 exists
                'customer_id' => 2, // Assuming a user with ID 2 exists
                'name' => 'Basketball Match',
                'field_name' => 'Basketball Court 1',
                'date_time' => Carbon::now()->addDays(2)->toDateTimeString(),
                'status' => 'pending',
                'amount' => 150.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'field_id' => 3, // Assuming a field with ID 3 exists
                'customer_id' => 3, // Assuming a user with ID 3 exists
                'name' => 'Tennis Game',
                'field_name' => 'Tennis Court A',
                'date_time' => Carbon::now()->addDays(3)->toDateTimeString(),
                'status' => 'canceled',
                'amount' => 80.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'field_id' => 1, // Assuming a field with ID 1 exists
                'customer_id' => 2, // Assuming a user with ID 2 exists
                'name' => 'Football Match',
                'field_name' => 'Soccer Field B',
                'date_time' => Carbon::now()->addDays(4)->toDateTimeString(),
                'status' => 'confirmed',
                'amount' => 120.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'field_id' => 2, // Assuming a field with ID 2 exists
                'customer_id' => 1, // Assuming a user with ID 1 exists
                'name' => 'Basketball Tournament',
                'field_name' => 'Basketball Court 2',
                'date_time' => Carbon::now()->addDays(5)->toDateTimeString(),
                'status' => 'pending',
                'amount' => 200.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
