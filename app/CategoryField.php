<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryField extends Model
{
    protected $table = 'category_fields';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
    $table->string('name');
    $table->string('unique_field_name');
    $table->foreign('data_category_id')->references('id')->on('data_categories');
    $table->foreign('author_id')->references('id')->on('users');
    //these are fields that dictate input type and the benchmark that it is to be checked against
    $table->string('data_type');
    $table->integer('benchmark_operand');
    $table->string('benchmark_operator');
    $table->timestamps();
     */
    protected $fillable = [
        'name', 'unique_field_name', 'data_category_id', 'author_id', 'data_type', 'benchmark_operator', 'benchmark_operand',
    ];
}
