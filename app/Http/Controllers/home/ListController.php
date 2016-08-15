<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    
    public function getIndex($c)
    {
        // dd($p,$c);   
        //5个分类导航
        $cates = DB::table('ms_goods_cate')->skip(0)->take(5)->get();
        $goods = $this->getGoodspubu($c);
        // dd($goods);
        return view('home/list/catelist',['cates'=>$cates,'goods'=>$goods]);
    }
    public function getGoodspubu($c)
    {
        if ($c == 0) 
        {
            $goods = DB::table('ms_goods')->get();
        }
        else
        {
            $goods = DB::table('ms_goods')->where('cid',$c)->get();
        }
        return $goods;
    }
   
}
