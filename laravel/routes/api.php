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
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any("learn",'Learn\AjaxController@test');

Route::get('testShow/{id}','flatSkuController@testShow');

Route::get('test123',function (){
    return 1111;
});
Route::get('a',function (){
    echo 1;
});
