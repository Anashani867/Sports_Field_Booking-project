<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // في ملف الهجرة الجديدة
    public function up()
    {
        Schema::table('media', function (Blueprint $table) {
            // إضافة حقل description
            $table->text('description')->nullable();  // حقل الوصف (اختياري)

        });
    }

    public function down()
    {
        Schema::table('media', function (Blueprint $table) {
            // حذف حقل description و timestamps في حالة التراجع عن الهجرة
            $table->dropColumn('description');
        });
    }

};
