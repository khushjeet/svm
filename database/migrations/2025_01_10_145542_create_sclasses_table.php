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
    $table->string('class_name_in_words'); // Class name
    $table->string('class_name_in_number'); // Class code
    $table->decimal('class_fee', 8, 2); // Class fee
    $table->string('class_code'); // Teacher name
    $table->integer('no_of_students'); // Maximum number of students
    $table->string('no_of_subject'); // Teacher's mobile number
    $table->foreignId('teacher_id');
    $table->string('class_teacher_first_name');
    $table->string('class_teacher_last_name');
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
