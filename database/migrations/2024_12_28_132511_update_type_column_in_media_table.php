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
        Schema::table('media', function (Blueprint $table) {
            $table->string('type', 255)->change(); // Adjust the size if necessary
        });
    }

    public function down()
    {
        Schema::table('media', function (Blueprint $table) {
            $table->string('type', 100)->change(); // Optionally revert to the previous size
        });
    }

};
