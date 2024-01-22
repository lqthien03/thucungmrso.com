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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->string('link');
            $table->text('description');
            $table->string('content');
            $table->string('image');
            $table->string('brand');
            $table->float('old_price',10,3);
            $table->float('new_price',10,3);
            $table->foreignId('category_level1_id')->nullable()->constrained('category_level1s')->cascadeOnDelete();
            $table->foreignId('category_level2_id')->nullable()->constrained('category_level2s')->cascadeOnDelete();
            $table->foreignId('tag_product_id')->nullable()->constrained('tag_products')->cascadeOnDelete();
            $table->foreignId('seo_id')->nullable()->constrained('seos')->cascadeOnDelete();
            $table->timestamp('created_at')->useCurrent();
$table->timestamp('updated_at')->useCurrent();
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
