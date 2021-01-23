<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('category');
            $table->text('styleFamily');
            $table->text('style');
            $table->integer('srmFrom');
            $table->integer('srmTo');
            $table->integer('abvFrom');
            $table->integer('abvTo');
            $table->integer('ibuFrom');
            $table->integer('ibuTo');
        });
    }

    public function down()
    {
        Schema::dropIfExists('beers');
    }
}
