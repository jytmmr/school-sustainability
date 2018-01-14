<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataCategory extends Model
{
    protected $table = 'data_categories';

    // don't need fillable or guarded unless we want mass assignment

    protected $fillable = ['name', 'description'];

}
