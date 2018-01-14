<?php
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// do everything here

Route::get('/', function () {
    return view('welcome');
//    return redirect('/login');
});

Auth::routes();

Route::get('/data-category', 'DataCategoryController@createView');

Route::post('/api/data-category', 'DataCategoryController@create');

Route::get('/data-category/{id}', 'DataCategoryController@editView');

Route::get('/test/{id}', 'DataCategoryController@test');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'UserController@showProfile');//->name('profile');

Route::get('/teachingSubmit', 'TeachingDataController@viewSubmission');
Route::post('/teaching-data', 'TeachingDataController@create');
Route::get('/test', 'TeachingDataController@index');

Route::get('/teaching-data-review', 'TeachingDataController@viewDataReview');



Route::get('/getWebUsers', 'TeachingDataController@getAllTeachingData');


