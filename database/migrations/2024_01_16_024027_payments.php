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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained();
            $table->string('ten');
            $table->string('dienthoai');
            $table->string('email');
            $table->string('city');
            $table->string('district');
            $table->string('wards');
            $table->string('diachi');
            $table->string('yeucaukhac');
            $table->json('products'); // Để lưu thông tin sản phẩm dưới dạng JSON
            $table->decimal('total_amount', 10, 2);
            $table->enum('payments', ['12', '13']);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
