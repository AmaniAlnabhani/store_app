<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProudectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proudects', function (Blueprint $table) {
            $table->id();
            $table->String('name')->nullable();
            $table->Double('price')->nullable();
            $table->String('section')->nullable();
            $table->Integer('quantity')->nullable();
            $table->String('attachment')->nullable();
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
        Schema::dropIfExists('proudects');
    }
}
