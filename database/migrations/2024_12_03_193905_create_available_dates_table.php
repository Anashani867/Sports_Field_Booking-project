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
        Schema::create('available_dates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('field_id');
            $table->timestamp('start_date_time');
            $table->timestamp('end_date_time');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('available_dates');
    }
};
