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
        $cate = DB::table('ms_goods_cate')->where('id',$c)->first();
        if ($c == 0) 
        {
            $goods = DB::table('ms_goods')->paginate(16);
        }
        else
        {
            $goods = DB::table('ms_goods')->where('cid',$c)->paginate(16);
        }
        return view('home/list/catelist',['catename'=>$cate->name,'goods'=>$goods]);
    }
}
