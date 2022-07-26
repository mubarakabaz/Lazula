<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensor', function (Blueprint $table) {
            $table->id();
            $table->text('suhu')->nullable();
            $table->text('ph')->nullable();
            $table->text('tds')->nullable();
            $table->text('ppu')->nullable();
            $table->text('ppd')->nullable();
            $table->text('ppn')->nullable();
            $table->text('pab')->nullable();
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
        Schema::dropIfExists('sensor');
    }
}
