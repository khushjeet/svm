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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('academic_year');
            $table->string('admission_number')->unique();
            $table->string('admission_date');
            $table->string('roll_number');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('class');
            $table->string('religion');
            $table->string('category');
            $table->string('primary_contact_number');
            $table->string('caste');
            $table->string('mother_tongue');
            $table->string('profile_image');
            $table->date('dob');
            $table->string('gender');
            $table->string('blood_group');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
