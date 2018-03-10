<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login','LoginController@userLogin');
Route::get('login','LoginController@daftarUser');
Route::post('login/tambah','LoginController@insertUser');
Route::delete('login/{id}','LoginController@hapusUser');

Route::get('modul','ModulController@daftarModul');
Route::post('modul','ModulController@insertModul');
Route::put('modul','ModulController@insertModul');
Route::delete('modul/{id}','ModulController@hapusModul');

Route::get('take','TakeController@daftarPengambilan');
Route::get('take/{id}','TakeController@byID');
Route::get('take/search/{id}','TakeController@search');
Route::post('take','TakeController@insertPengambilan');
Route::delete('take/{id}','TakeController@hapusPengambilan');

Route::post('images/{id}','PictureController@add');
Route::get('images/{id}','PictureController@getPicture');

Route::get('info','infoController@info');
