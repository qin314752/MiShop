<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\Goods_cateController;

class HomeController extends Controller
{
    public function index()
    {
        $slides = DB::table('ms_notice')->get();
        $recs = DB::table('ms_goods')->where('iscomm',1)->get();
        return view('home/index',['slides'=>$slides,'recs'=>$recs]);
    }
    //首页头部调用方法
    public static function head()
    {
        $cate = DB::table('ms_goods_cate')->get();
        $cates = Goods_cateController::Cate($cate,0);
        $navs = DB::table('ms_nav_list')->get();
        return view('layout/head',['navs'=>$navs,'cates'=>$cates]);
    }
    public static function minihead()
    {
        $cate = DB::table('ms_goods_cate')->get();
        $cates = Goods_cateController::Cate($cate,0);
        $navs = DB::table('ms_nav_list')->get();
        return view('layout/minihead',['navs'=>$navs,'cates'=>$cates]);
    }
    public static function footer()
    {
        $flink = DB::table('ms_flink')->get();
        return view('layout/footer',['flink'=>$flink]);
    }   
    
}
