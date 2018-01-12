<?php

namespace App\Http\Controllers;

use App\CategoryField;
use Illuminate\Http\Request;

class CategoryFieldController extends Controller
{
    public function create($newCategoryField, $dataCategoryId){
        $categoryField = new CategoryField();
        //TODO fill in rest of fields
        $categoryField->data_category_id = $dataCategoryId;


        $categoryField->save();
    }
}
