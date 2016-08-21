<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function getIndex($type=4,$keywords='')
    {
        // dd($keywords);
        $uid = session('user')->id;
        //增加搜索
        $res = DB::table('ms_order')->where('uid',$uid)->where( function($query) use ($type)
            {
                if ($type != 4) {
                   $query->where('status',$type);
                }
            })->paginate(5);
        $arr = [];
        //遍历结果给数组
        foreach ($res as $key => $value) {
            $goods = DB::table('ms_order_goods')->where('order_id',$value->order_code)
            ->join('ms_goods','ms_order_goods.goods_id','=','ms_goods.id')->get();
            $arr[$key] = $value;
            $arr[$key]->goods = $goods;
        }
        return view('home/order/order',['orders'=>$arr,'fenye'=>$res]);
    }
    public function getSearch(Request $request)
    {
        $keywords = $request->input('keywords');
        // dd($keywords);
        $uid = session('user')->id;
        //增加搜索
        $res = DB::table('ms_order')->where('uid',$uid)->where('order_code','like','%'.$keywords.'%')->paginate(5);
        $arr = [];
        //遍历结果给数组
        foreach ($res as $key => $value) {
            $goods = DB::table('ms_order_goods')->where('order_id',$value->order_code)
            ->join('ms_goods','ms_order_goods.goods_id','=','ms_goods.id')->get();
            $arr[$key] = $value;
            $arr[$key]->goods = $goods;
        }
        return view('home/order/order',['orders'=>$arr,'fenye'=>$res,'keywords'=>$keywords]);
    }
}
