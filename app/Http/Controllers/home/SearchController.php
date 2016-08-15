<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB; 
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
     public function Search(Request $request)
    {
        $keyw = $request->input('keyw');
        $cates = DB::table('ms_goods_cate')->skip(0)->take(5)->get();
        $goods = DB::table('ms_goods')->where('name','like','%'.$keyw.'%')->get();
        return view('home/list/catelist',['cates'=>$cates,'goods'=>$goods]);
    }
}
