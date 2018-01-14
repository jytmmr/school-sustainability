<?php

namespace App\Http\Controllers;

use App\CategoryField;
use App\DataCategory;
use App\Services\CategoryFieldService;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Services\DataCategoryService;
use Illuminate\Support\Facades\Log;

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
//        Log::info("hellowherere");
        $dataCategory->name = $request->input('name');
        $dataCategory->description = $request->input('description');
        $dataCategory->author_id = Auth::user()->getAuthIdentifier();
        $this->dataCategoryService->save($dataCategory);
        $id = $dataCategory->id;
        $this->createCategoryFields($id, json_decode($request->input('categoryFields')));

//        return response()->json(['id'=> $id]);
//        Log::debug("hererererererere");
//        return redirect("/data-category/".$id);
    }


    public function createCategoryFields($id, $categoryFields){
        if ($categoryFields != null){
            foreach ($categoryFields as $categoryField) {
                $newCategoryField = new CategoryField();
                $newCategoryField->name = $categoryFields->name;
                $newCategoryField->unique_field_name =  $categoryFields->name;
                $newCategoryField->author_id = $this->user->getAuthIdentifier();
                $newCategoryField->data_category_id = $id;
                //TODO fill in rest of fields
                $this->categoryFieldService->save($categoryField);
            }
        }
    }




    // views

    public function createView(){
        return view('data-category-create');
    }

    public function editView($id){
        return view('data-category-edit',
            ['dataCategory' => DataCategory::where('id', $id)->first(),
                'categoryFields' => CategoryField::where('data_category_id',$id)->get()]);
    }
    public function test ($id){
        return DataCategory::where('id', 70)->first();
    }
//
//    public function viewDataCategory(){
//        return view('data-category');
//    }

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
