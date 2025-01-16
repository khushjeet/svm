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
        Schema::create('school_classes', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Class name
            $table->string('teacher_name'); // Teacher's name
            $table->string('teacher_image')->nullable(); // Path to teacher's image
            $table->string('class_image')->nullable(); // Path to class image
            $table->string('time')->nullable(); // Class time
            $table->integer('capacity')->nullable(); // Class capacity
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_classes');
    }
};
