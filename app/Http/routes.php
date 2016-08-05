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

Route::get('/', function () {
    return view('welcome');
});

Route::Controller('/admin/','AdminController');
Route::Controller('/admin/user','admin\UserController');
Route::Controller('/admin/goods_cate','admin\Goods_cateController');
