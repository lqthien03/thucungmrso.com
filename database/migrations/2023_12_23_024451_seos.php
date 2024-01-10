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
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('category_1_id'); 
            $table->unsignedBigInteger('category_2_id'); // Bổ sung cột category_id để liên kết với danh mục của sản phẩm
            $table->string('title');
            $table->text('description');
            // Thêm các trường khác tùy thuộc vào nhu cầu của bạn
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('category_1_id')->references('id')->on('category_1s')->onDelete('cascade');
            $table->foreign('category_2_id')->references('id')->on('category_2s')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
