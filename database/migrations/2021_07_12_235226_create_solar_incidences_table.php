<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolarIncidencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solar_incidences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id');
            $table->string('uuid')->unique();
            $table->double('jan', 10, 5);
            $table->double('feb', 10, 5);
            $table->double('mar', 10, 5);
            $table->double('apr', 10, 5);
            $table->double('may', 10, 5);
            $table->double('jun', 10, 5);
            $table->double('jul', 10, 5);
            $table->double('aug', 10, 5);
            $table->double('sep', 10, 5);
            $table->double('oct', 10, 5);
            $table->double('nov', 10, 5);
            $table->double('dec', 10, 5);
            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solar_incidences');
    }
}
