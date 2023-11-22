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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departure_station', 150);
            $table->string('arrival_station', 150);
            $table->string('departure_time');
            $table->string('arrival_time');
            $table->string('train_code', 50);
            $table->tinyInteger('wagons');
            $table->tinyInteger('delay')->default(0);
            $table->boolean('in_time')->default(false);
            $table->boolean('cancelled');
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
        Schema::dropIfExists('trains');
    }
};
