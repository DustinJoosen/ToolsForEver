<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikelen', function (Blueprint $table) {
            $table->id();
            $table->string("naam")->unique();
            $table->foreignId("fabriek_id");
            $table->string("type");
            $table->unsignedSmallInteger("min_aantal")->default(0);
            $table->decimal("inkoop_waarde");
            $table->decimal("verkoop_waarde");
            $table->timestamps();

            $table->foreign("fabriek_id")->references("id")->on("fabrieken");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikels');
    }
}
