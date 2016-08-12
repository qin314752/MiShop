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
Route::Controller('/home/login','home\LoginController');
Route::get('/admin','AdminController@index');

// Route::Controller('/admin/login','admin\LoginController');

Route::Controller('/admin/user','admin\UserController');
Route::Controller('/admin/goods','admin\GoodsController');
Route::Controller('/admin/nav','admin\NavController');
Route::Controller('/admin/flink','admin\FlinkController');
Route::Controller('/admin/goods_cate','admin\Goods_cateController');
