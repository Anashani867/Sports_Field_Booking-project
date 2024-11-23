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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_id');
            $table->foreign('booking_id')->references('id')->on('orders')->onDelete('set null');
            $table->unsignedBigInteger('user_id');    // Reference to user
            $table->decimal('amount', 8, 1);
            $table->enum('payment_method', ['Credit Card', 'PayPal', 'Cash']);
            $table->enum('payment_status', ['Completed', 'Pending', 'Failed'])->default('Pending');
            $table->timestamps();

            // Add foreign keys
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
