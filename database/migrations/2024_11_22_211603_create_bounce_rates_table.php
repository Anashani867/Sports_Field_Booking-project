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
        Schema::create('bounce_rates', function (Blueprint $table) {
            $table->id();
            $table->date('date'); // Date of the bounce rate measurement
            $table->decimal('rate', 5, 1); // Bounce rate percentage (e.g., 45.50 for 45.50%)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bounce_rates');
    }
};
