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
        Schema::table('fields', function (Blueprint $table) {
            // تعديل السعة إذا كانت موجودة بالفعل أو إضافتها إن لم تكن موجودة
            if (Schema::hasColumn('fields', 'capacity')) {
                $table->integer('capacity')->default(1)->change(); // تحديث السعة الافتراضية إلى 10
            } else {
                $table->integer('capacity')->default(1); // إنشاء عمود السعة الافتراضية
            }
        });
    }

    public function down()
    {
        Schema::table('fields', function (Blueprint $table) {
            // التراجع عن العمود (إعادته إلى الحالة السابقة أو حذفه إذا أضيف)
            $table->integer('capacity')->default(0)->change(); // تعيد القيمة الافتراضية إلى 0
        });
    }


};
