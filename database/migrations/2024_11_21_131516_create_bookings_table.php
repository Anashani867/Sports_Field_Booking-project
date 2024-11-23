<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id')->comment('Reference to the player who made the booking');
            $table->string('name');
            $table->string('field_name');
            $table->unsignedBigInteger('field_id')->comment('Reference to the booked field');
            $table->decimal('amount', 10, 2)->after('status'); // Add amount column after 'status'
            $table->timestamp('date_time')->comment('Booking date and time');
            $table->enum('status', ['confirmed', 'canceled', 'pending'])->default('pending')->comment('Booking status');
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
