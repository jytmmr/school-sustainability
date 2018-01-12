<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 1/11/18
 * Time: 9:48 PM
 */

namespace App\Services;


use App\DataCategory;

class DataCategoryService
{

    public function save(DataCategory $dataCategory){
        $dataCategory->save();
        return $dataCategory;
    }
}