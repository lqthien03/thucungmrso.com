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
            // $table->id();
            // $table->unsignedBigInteger('product_id');
            // $table->unsignedBigInteger('category_level1_id');
            // $table->unsignedBigInteger('category_level2_id'); // Bổ sung cột category_id để liên kết với danh mục của sản phẩm
            // $table->string('title');
            // $table->text('description');
            // // Thêm các trường khác tùy thuộc vào nhu cầu của bạn
            // $table->timestamps();

            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            // $table->foreign('category_level1_id')->references('id')->on('category_level1s')->onDelete('cascade');
            // $table->foreign('category_level2_id')->references('id')->on('category_level2s')->onDelete('cascade');
            $table->id();
            $table->string('seo_tittle');
            $table->string('seo_keyword');
            $table->string('seo_description');
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
