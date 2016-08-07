<?php

namespace App\Http\Controllers\admin;
use DB;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Goods_cateController extends Controller
{
	//商品分类主页
    public function getIndex(Request $request)
    {
        $num = $request->input('num',5);
    	$goods_cates = DB::table('ms_goods_cate')->select(DB::raw("*,CONCAT(path,',',pid) AS paths"))
        ->where(function($query) use ($request)
        {
            if ($request->search != '') 
            {
                $query->where('name','like','%'.$request->search.'%');
            }
        })
        ->orderBy("paths")->paginate($num); 
        return view('admin/goods_cate/index',['res'=>$goods_cates,'num'=>$num,'search'=>$request->search]);
    }
    //添加商品分类
    public function getAdd(Request $request)
    {
    	$cates = $request->all();
    	$res = DB::table('ms_goods_cate')->insert($cates);
    	echo $res;
    }
    public function getDelete($id)
    {
    	$res = DB::table('ms_goods_cate')->where('id',$id)->delete();
    	return back()->with('success','删除成功!');
    }
    public function postUpdate(Request $request)
    {
        $res = DB::table('ms_goods_cate')->where('id',$request->sid)->update($request->except(['sid','_token']));
        return redirect(url("admin/goods_cate"));
    	
    }
    public function getEdit($id)
    {
    	$res = DB::table('ms_goods_cate')->where('id',$id)->first();
    	return view('admin/goods_cate/edit',['res'=>$res]);
    }
}
