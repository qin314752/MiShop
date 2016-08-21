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
//前台主页
Route::get('/', 'HomeController@index');
Route::get('/search/', 'home\SearchController@search');//前台商品搜索
Route::controller('/checkout', 'home\CheckoutController');//订单
Route::Controller('/detail','home\DetailController');//商品详情
Route::Controller('/home/login','home\LoginController');//前台登录
Route::Controller('/list','home\ListController');//商品列表
Route::Controller('/addr','home\AddressController');//收货地址
Route::Controller('/cart','home\CartController');//购物车
Route::Controller('/order','home\OrderController');//个人中心订单管理
Route::Controller('/ucenter','home\UcenteController');//前台个人中心
Route::Controller('/commuc','home\CommucController');//个人中心评价
Route::Controller('/commlist','home\CommlistController');//商品评价显示

//后台首页
Route::get('/admin','AdminController@index');
//权限管理
Route::Controller('/admin/qx','admin\QxController');
Route::Controller('/admin/comment','admin\CommentController');//后台评论管理
Route::Controller('/admin/user','admin\UserController');//用户管理
Route::Controller('/admin/goods','admin\GoodsController');//商品管理
Route::Controller('/admin/nav','admin\NavController');//导航菜单管理
Route::Controller('/admin/flink','admin\FlinkController');//友情链接
Route::Controller('/admin/goods_cate','admin\Goods_cateController');//商品分类
Route::Controller('/admin/order','admin\OrderController');//后台订单
