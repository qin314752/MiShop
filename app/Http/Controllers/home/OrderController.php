<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function getIndex($p = 1)
    {
        $num = 5;
        $s = $num*$p;
        $uid = session('user')->id;
        $res = DB::table('ms_order')->where('uid',$uid)->skip($s)->take($num)->get();
        $arr = [];
        foreach ($res as $key => $value) {
            $goods = DB::table('ms_order_goods')->where('order_id',$value->order_code)
            ->join('ms_goods','ms_order_goods.goods_id','=','ms_goods.id')->get();
            $arr[$key] = $value;
            $arr[$key]->goods = $goods;
        }
        return view('home/order/order',['orders'=>$arr]);
    }
}
