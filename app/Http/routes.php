<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'HomeController@index');
Route::get('/search/', 'home\SearchController@search');
Route::controller('/checkout', 'home\CheckoutController');
Route::Controller('/detail','home\DetailController');
Route::Controller('/home/login','home\LoginController');
Route::Controller('/list','home\ListController');

//购物车
Route::Controller('/cart','home\CartController');
// Route::Controller('/ucenter','home\UcenterController');
Route::Controller('/order','home\OrderController');


Route::get('/admin','AdminController@index');
// Route::Controller('/admin/order','admin\OrderController');
Route::Controller('/admin/user','admin\UserController');
Route::Controller('/admin/goods','admin\GoodsController');
Route::Controller('/admin/nav','admin\NavController');
Route::Controller('/admin/flink','admin\FlinkController');
Route::Controller('/admin/goods_cate','admin\Goods_cateController');
