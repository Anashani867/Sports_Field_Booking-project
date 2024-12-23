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
        Schema::table('fields', function (Blueprint $table) {
            $table->dateTime('start_date_time')->nullable();  // إضافة حقل تاريخ ووقت البدء
            $table->dateTime('end_date_time')->nullable();    // إضافة حقل تاريخ ووقت الانتهاء
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fields', function (Blueprint $table) {
            //
        });
    }
};
