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
        Schema::create('parent_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->string('father_name');
            $table->string('father_email');
            $table->string('father_mobile_number');
            $table->string('father_occupation');
            $table->string('mother_name');
            $table->string('mother_email');
            $table->string('mother_mobile_number');
            $table->string('mother_occupation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_information');
    }
};
