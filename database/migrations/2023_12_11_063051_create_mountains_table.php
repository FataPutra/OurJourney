<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mountains', function (Blueprint $table) {
            $table->id();
            $table->string('mountain_name');
            $table->string('mountain_images');
            $table->string('route_beginner');
            $table->longText('tips1');
            $table->string('route_intermediate');
            $table->longText('tips2');
            $table->string('route_advance');
            $table->longText('tips3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mountains');
    }
};