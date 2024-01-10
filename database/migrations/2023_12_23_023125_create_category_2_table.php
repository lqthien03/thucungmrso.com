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
        Schema::create('category_2s', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->string('link');
            $table->text('description');
            $table->unsignedBigInteger('category_1_id');
            $table->timestamps();
            $table->foreign('category_1_id')->references('id')->on('category_1s')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_2');
    }
};
