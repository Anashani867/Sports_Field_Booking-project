<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;
use App\Models\User;
use App\Models\Booking;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $bookings = Booking::all();

        if ($users->isEmpty() || $bookings->isEmpty()) {
            $this->command->warn('No users or bookings found. Please seed users and bookings first.');
            return;
    }


        for ($i = 1; $i <= 50; $i++) {
            Payment::create([
                'booking_id' => $bookings->random()->id,
                'user_id' => $users->random()->id,
                'amount' => rand(50, 500), // Random payment amounts
                'payment_method' => ['Credit Card', 'PayPal', 'Cash'][rand(0, 2)], // Random payment method
                'payment_status' => ['Completed', 'Pending', 'Failed'][rand(0, 2)], // Random status
                'created_at' => now()->subDays(rand(0, 30)), // Random dates within the last 30 days
            ]);
        }
    }
}
