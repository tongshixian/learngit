<?php

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

/*
Route::get('/', function () {
    dd(12312);
    return view('welcome');
});
*/
Route::get('admin', function () {
    return view('admin_template');
});
//测试各种功能的控制器
Route::get('test/index', 'TestController@index');
Route::get('test/setSession', 'TestController@setSession');
Route::get('test/setRedis', 'TestController@setRedis');
Route::get('test/setCookie', 'TestController@setCookie');
Route::get('test/curl', 'TestController@curl');
Route::get('test/path', 'TestController@path');


Route::get('post/create','PostController@create');
Route::post('post/create','PostController@create');
Route::post('post/submit','PostController@submit');
Route::get('post/show','PostController@show');
Route::get('post/del','PostController@del');
Route::get('post/del','PostController@del');

Route::get('rev/create','RevController@create');
Route::post('rev/create','RevController@create');
Route::get('rev/show','RevController@show');
Route::get('rev/del','RevController@del');

Route::get('wek/create','WekController@create');
Route::post('wek/create','WekController@create');
Route::get('wek/show','WekController@show');
Route::get('wek/del','WekController@del');
Route::get('wek/up','WekController@up');

Route::any('collection/collect','CollectionController@collect');
Route::any('collection/get','CollectionController@get');
Route::any('collection/queryList','CollectionController@queryList');
Route::any('collection/curl','CollectionController@curl');
Route::any('collection/test','CollectionController@test');

Route::any('check/index','CheckController@index');
Route::any('check/show','CheckController@show');
Route::any('check/test','CheckController@test');
Route::any('check/collect','CheckController@collect');

Route::resource('/prompt','PromptController');

Route::any('praApi/index','PraApiController@index');

Route::any('student/add','StudentController@add');
Route::any('student/show','StudentController@show');
Route::any('student/up','StudentController@up');
Route::any('student/del','StudentController@del');
Route::any('student/random','StudentController@random');
Route::any('student/fen','StudentController@fen');

Route::any('login/login','LoginController@login');

Route::any('planeLogin/login','PlaneLoginController@login');
Route::any('planeLogin/register','PlaneLoginController@register');

Route::any('base/base','BaseController@base');

Route::any('pre/getShow','PreController@getShow');

Route::any('sign/signIn','SignController@signIn');
Route::any('sign/admin','SignController@admin');

Route::any('view/show','ViewController@show');
Route::any('view/pages','ViewController@pages');
Route::any('view/photo','ViewController@photo');
Route::any('view/test','ViewController@test');

Route::any('photo/show','PhotoController@show');
Route::any('photo/create','PhotoController@create');

Route::any('mail/ship','MailController@ship');
Route::any('photo/index','PhotoController@index');

Route::any('shop/shopType','ShopController@shopType');
Route::any('shop/show','ShopController@show');
Route::any('shop/select','ShopController@select');

Route::any('user/createUser','UserController@createUser');
Route::any('user/createBook','UserController@createBook');
Route::any('user/selectUser','UserController@selectUser');
Route::any('user/modify','UserController@modify');

Route::get('sale/show','SaleController@show');
Route::get('sale/del','SaleController@del');
Route::get('sale/modify','SaleController@modify');
Route::post('sale/modify','SaleController@modify');

//公寓管理
Route::get('apartment/add','ApartmentController@add');
Route::post('apartment/add','ApartmentController@add');
Route::get('apartment/show','ApartmentController@show');

//房间管理
Route::get('room/show','RoomController@show');
Route::get('room/add','RoomController@add');
Route::post('room/add','RoomController@add');
Route::get('room/del','RoomController@del');
Route::get('room/modify','RoomController@modify');

Route::get('manager/show','ManagerController@show');
Route::get('manager/add','ManagerController@add');
Route::post('manager/add','ManagerController@add');

//房间类型
Route::get('flatType/create','FlatTypeController@create');
Route::post('flatType/create','FlatTypeController@create');
Route::get('flatType/show','FlatTypeController@show');

//房间属性
Route::get('flatAttribute/create','FlatAttributeController@create');
Route::post('flatAttribute/create','FlatAttributeController@create');
Route::get('flatAttribute/show','FlatAttributeController@show');

//房间属性值
Route::get('flatAttribute/createValue','FlatAttributeController@createValue');
Route::post('flatAttribute/createValue','FlatAttributeController@createValue');
Route::get('flatAttribute/showValue','FlatAttributeController@showValue');

//房间sku
Route::get('flatSku/create','flatSkuController@create');
Route::post('flatSku/create','flatSkuController@create');
Route::get('flatSku/show','flatSkuController@show');
Route::get('flatSku/test','flatSkuController@test');
Route::get('flatSku/curl','flatSkuController@curl');

Route::get('week1shop/add','Week1ShopController@add');
Route::post('week1shop/add','Week1ShopController@add');
Route::get('week1shop/show','Week1ShopController@show');
Route::get('week1shop/del','Week1ShopController@del');
Route::get('week1shop/modify','Week1ShopController@modify');
Route::post('week1shop/modify','Week1ShopController@modify');
Route::get('week1shop/shopDesc','Week1ShopController@shopDesc');


//微信相关
Route::any('/wexin/index','Weinxin\IndexController@index');

Route::group(['middleware' => ['web']], function () {
    //
});

//Route::get('week1shop/show','Week1ShopController@show')->middleware('age');

Route::post("ajax",'Learn\AjaxController@test');
Route::get("/testView",'Learn\AjaxController@testView');

//月考控制器
Route::get('month/create','MonthController@create');
Route::post('month/create','MonthController@create');
Route::get('month/show','MonthController@show');
Route::get('month/login','MonthController@login');
Route::post('month/login','MonthController@login');
Route::get('month/up','MonthController@up');
Route::get('month/buy','MonthController@buy');
Route::get('month/showOrder','MonthController@showOrder');
Route::get('month/pay','MonthController@pay');
Route::get('month/showDesc','MonthController@showDesc');
Route::get('month/createDesc','MonthController@createDesc');
Route::post('month/createDesc','MonthController@createDesc');
Route::get('month/descNo','MonthController@descNo');
Route::post('month/descNo','MonthController@descNo');
Route::get('month/news','MonthController@news');
Route::post('month/news','MonthController@news');
Route::get('month/showNews','MonthController@showNews');

//企业管理与架构(Framework)

//字符串练习
Route::get('framework/str/index','Framework\StrController@index');
Route::get('framework/str/test','Framework\StrController@test');

//水仙花
Route::get('framework/narcissus/index','Framework\NarcissusController@index');