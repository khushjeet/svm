<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurToppersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_toppers', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Name of the topper
            $table->string('profession'); // Profession of the topper
            $table->text('description'); // Description about the topper
            $table->string('image_path'); // Path to topper's image
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('our_toppers');
    }
}
