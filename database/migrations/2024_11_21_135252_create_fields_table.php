<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Field;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('field_name');
            $table->text('location')->nullable();
            $table->string('availability')->nullable();
            $table->decimal('price', 10, 2)->default(0);
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status
            $table->timestamps();

            // Foreign keys (اختياري إذا كنت بحاجة إلى الربط مع جداول أخرى)
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('admin_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fields');
    }
};
