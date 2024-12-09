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
        Schema::table('bookings', function (Blueprint $table) {
            $table->timestamp('start_date_time')->nullable(); // يمكن أن يكون الحقل فارغاً
            $table->timestamp('end_date_time')->nullable();   // يمكن أن يكون الحقل فارغاً
        });
    }

    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn(['start_date_time', 'end_date_time']);
        });
    }

};
