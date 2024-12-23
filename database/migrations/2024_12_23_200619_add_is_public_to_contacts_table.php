<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->boolean('is_public')->default(true); // إضافة عمود is_public
            $table->string('subject')->nullable(); // إضافة عمود subject
        });
    }

    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('is_public'); // حذف العمود is_public
            $table->dropColumn('subject'); // حذف العمود subject
        });
    }



};
