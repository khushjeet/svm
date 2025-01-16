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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_header_1')->nullable();
            $table->string('image_title_1')->nullable();
            $table->string('image_header_2')->nullable();
            $table->string('image_title_2')->nullable();
            $table->string('image_header_3')->nullable();
            $table->string('image_title_3')->nullable();
            $table->string('image_header_4')->nullable();
            $table->string('image_title_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
