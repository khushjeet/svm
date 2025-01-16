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
        Schema::create('toppers', function (Blueprint $table) {
            $table->id();
            $table->string('image_one');
            $table->string('image_one_name');
            $table->string('image_one_class');
            $table->string('image_one_title');

            $table->string('image_two');
            $table->string('image_two_name');
            $table->string('image_two_class');
            $table->string('image_two_title');

            $table->string('image_three');
            $table->string('image_three_name');
            $table->string('image_three_class');
            $table->string('image_three_title');

            $table->string('image_four');
            $table->string('image_four_name');
            $table->string('image_four_class');
            $table->string('image_four_title');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toppers');
    }
};
