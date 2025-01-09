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
        Schema::create('sclasses', function (Blueprint $table) {
            $table->id();
            $table->string('class_name'); // Class name
            $table->string('class_code'); // Class code
            $table->date('start_from'); // Start date
            $table->integer('duration'); // Duration in months
            $table->decimal('class_fee', 8, 2); // Class fee
            $table->string('class_teacher_name'); // Teacher name
            $table->integer('max_no_students'); // Maximum number of students
            $table->string('class_teacher_mobile_number'); // Teacher's mobile number
            $table->timestamps(); // Created at and updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sclasses');
    }
};
