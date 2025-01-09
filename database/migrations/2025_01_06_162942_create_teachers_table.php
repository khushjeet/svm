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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('joining_date');
            $table->string('password');
            $table->string('confirm_password');
            $table->string('mobile_number');
            $table->string('gender');
            $table->string('designation');
            $table->string('class');
            $table->string('dob');
            $table->string('qualifications');
            $table->string('profile_image')->default('assets/images/1.jpg');
            $table->string('doc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
