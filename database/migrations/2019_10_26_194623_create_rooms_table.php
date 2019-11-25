<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('landloard_id');
            $table->integer('room_type');
            $table->string('city');
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('kitchen')->nullable();
            $table->integer('living_room')->nullable();
            $table->integer('persons')->nullable();
            $table->integer('dining_room')->nullable();
            $table->integer('study_room')->nullable();
            $table->integer('single_bed')->nullable();
            $table->integer('double_bed')->nullable();
            $table->integer(' wi_fi')->nullable();
            $table->integer('cable_tv')->nullable();
            $table->integer('central_heating')->nullable();
            $table->integer('washing_machine')->nullable();
            $table->integer('outdoor_area')->nullable();
            $table->integer('bed_linen')->nullable();
            $table->integer('accessibility')->nullable();
            $table->integer('elevator')->nullable();
            $table->integer('air_conditioning')->nullable();
            $table->string('address')->nullable();
            $table->integer('house_number')->nullable();
            $table->string('extra_info')->nullable();
            $table->integer('posta_code')->nullable();
            $table->integer('smoking_allowed')->nullable();
            $table->integer('pets_allowed')->nullable();
            $table->integer('guests')->nullable();
            $table->integer('tenant')->nullable();
            $table->string('price')->nullable();
            $table->string('available')->nullable();
            $table->string('title')->nullable();
            $table->string('photo')->nullable();

            $table->integer('status')->default();
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
        Schema::dropIfExists('rooms');
    }
}
