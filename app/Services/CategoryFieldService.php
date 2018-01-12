<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 1/11/18
 * Time: 10:14 PM
 */

namespace App\Services;


use App\CategoryField;

class CategoryFieldService
{

    public function save(CategoryField $categoryField){
        $categoryField->save();
        return $categoryField;
    }
}