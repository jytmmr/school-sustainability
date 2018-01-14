<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_fields', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('unique_field_name');
            $table->integer('data_category_id')->unsigned();
            $table->foreign('data_category_id')->references('id')->on('data_categories');
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('users');
            //these are fields that dictate input type and the benchmark that it is to be checked against
            $table->string('data_type');
            $table->integer('benchmark_operand');
            $table->string('benchmark_operator');
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
        Schema::drop('category_fields');
    }
}
