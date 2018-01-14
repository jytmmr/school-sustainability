<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('data_categories', function (Blueprint $table){
           $table->increments('id');
           $table->string('name');
           $table->string('description');
           $table->integer('author_id')->unsigned();
           $table->foreign('author_id')->references('id')->on('users');
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
        Schema::drop('data_categories');
    }
}
