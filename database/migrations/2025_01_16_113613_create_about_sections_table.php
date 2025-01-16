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
        Schema::create('about_sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('button_text', 255)->nullable();
            $table->string('button_link')->nullable();
            $table->string('ceo_name', 255)->nullable();
            $table->string('ceo_title', 255)->nullable();
            $table->string('ceo_image', 255)->nullable(); // Path to the uploaded image
            $table->string('image_1', 255)->nullable();   // Path to the uploaded image
            $table->string('image_2', 255)->nullable();   // Path to the uploaded image
            $table->string('image_3', 255)->nullable();   // Path to the uploaded image
            $table->timestamps(); // For created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};

