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
        Schema::table('user_fields', function (Blueprint $table) {
            $table->string('phone')->nullable(); // إضافة حقل رقم الهاتف
            $table->enum('gender', ['male', 'female', 'other'])->default('male'); // إضافة حقل الجنس
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('user_fields', function (Blueprint $table) {
            $table->dropColumn(['phone', 'gender']); // حذف الأعمدة في حال التراجع
        });
    }
};
