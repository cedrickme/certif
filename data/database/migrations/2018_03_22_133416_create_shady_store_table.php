<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShadyStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function upProd()
    {
        Schema::create('produits', function (Blueprint $table) {
          $table->increments('id');
          $table->string('type');
          $table->string('artiste');
          $table->string('info');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function downProd()
    {
        Schema::dropIfExists('produits');
    }
}
