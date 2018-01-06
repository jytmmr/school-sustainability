<?php
use Illuminate\Support\Facades\Route;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\TeachingDataController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// This file will be unused from now on
$userController = new UserController();

Route::middleware('auth')->get('/api', function (Request $request) {
    return $request->user();
});

//Route::get('/test', function(Request $request) {
//    Log::info("Hellow");
////    return $userController->allUsers();
//    return "Test";
//
//});
//
//Route::get('/getUsers','UserController@allUsers');
//
//
//Route::post('/teachingData', 'TeachingDataController@create');
//
//Route::get('/teachingData', 'TeachingDataController@getAllTeachingData');
//
//
//Route::post('/trial', 'TeachingDataController@insertRecord');