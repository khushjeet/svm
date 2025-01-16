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
        Schema::create('popular_teachers', function (Blueprint $table) {
            $table->id();
            $table->string('image_one');
            $table->string('image_one_name');
            $table->string('image_one_f_link');
            $table->string('image_one_x_link');
            $table->string('image_one_t_link');
            $table->string('image_two');
            $table->string('image_two_name');
            $table->string('image_two_f_link');
            $table->string('image_two_x_link');
            $table->string('image_two_t_link');
            $table->string('image_three');
            $table->string('image_three_name');
            $table->string('image_three_f_link');
            $table->string('image_three_x_link');
            $table->string('image_three_t_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('popular_teachers');
    }
};
