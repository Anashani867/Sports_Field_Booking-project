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
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('date_time');  // إزالة الحقل
        });
    }

    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->timestamp('date_time')->nullable();  // إضافة الحقل مرة أخرى إذا أردت التراجع عن التغيير
        });
    }

};
