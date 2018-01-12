<?php

namespace App\Http\Controllers;

use App\CategoryField;
use App\DataCategory;
use App\Services\CategoryFieldService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Services\DataCategoryService;

class DataCategoryController extends Controller
{
    private $categoryFieldService;
    private $dataCategoryService;
    private $user;

    public function __construct()
    {
        $this->middleware('auth');
        // TODO: $this->middleware() make sure user is admin
        $this->user =  Auth::user();
        $this->dataCategoryService = new DataCategoryService();
        $this->categoryFieldService = new CategoryFieldService();
    }

    public function create(Request $request) {
        $dataCategory = new DataCategory();

        $dataCategory->name = $request->input('name');
        $dataCategory->description = $request->input('description');
        $dataCategory->author_id = Auth::user()->getAuthIdentifier();
        $this->dataCategoryService->save($dataCategory);
        $id = $dataCategory->id;
        $this->createCategoryFields($id, json_decode($request->input('categoryFields')));
//        return redirect('/teaching-data-review')->
        return redirect("/data-category/{$id}");//->with(['dataCategory' => $dataCategory]); //don't need this
    }

    public function createCategoryFields($id, $categoryFields){

        foreach ($categoryFields as $categoryField) {
            $newCategoryField = new CategoryField();
            $newCategoryField->name = $categoryFields->
            $newCategoryField->author_id = $this->user->getAuthIdentifier();
            $newCategoryField->data_category_id = $id;
            //TODO fill in rest of fields
            $this->categoryFieldService->save($categoryField);
        }
    }




    // views
    public function viewDataCategory(){
        return view('data-category.new');
    }

    public function viewDataReview(){
        //return view('data-category.edit', ['' =>Session::get('teachingData')]);
    }
//
//    public function index () {
//
//        $data = array('name' => 'San Juan',
//            'date' => date('Y-m-d'));
//
//        return view('teaching-data-review')->with($data);
//
//    }
}
