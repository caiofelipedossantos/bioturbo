<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSolarBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solar_boards', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->default(DB::raw('(uuid())'));
            $table->string('description')->comment('Descrição da placa solar.');
            $table->double('potency', 10, 4)->comment('Potência da placa solar.');
            $table->double('price', 10,2)->comment('Preço da placa solar.');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solar_boards');
    }
}
