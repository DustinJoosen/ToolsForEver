<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoorraadPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voorraad', function (Blueprint $table) {
            $table->id();
            $table->foreignId("artikel_id");
            $table->foreignId("locatie_id");
            $table->unsignedBigInteger("aantal");
            $table->timestamps();

            $table->foreign("artikel_id")->references("id")->on("artikelen");
            $table->foreign("locatie_id")->references("id")->on("locaties");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voorraad_pivot');
    }
}
