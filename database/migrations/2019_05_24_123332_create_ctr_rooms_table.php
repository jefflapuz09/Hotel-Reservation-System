<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtrRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctr_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('floor_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('floor_id')
                    ->references('id')->on('ctr_floors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ctr_rooms');
    }
}
