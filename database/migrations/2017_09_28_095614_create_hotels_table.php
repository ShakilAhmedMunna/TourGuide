<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hotelName');
            $table->text('description');
            $table->text('address');
            $table->string('image');
            $table->string('website');
            $table->integer('hoteltype_id');
            $table->integer('place_id')->unsigned()->nullable();
            $table->foreign('place_id')->references('id')->on('places')->onDelete('restrict');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
