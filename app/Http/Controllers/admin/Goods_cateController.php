<?php

namespace App\Http\Controllers\admin;
use DB;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Goods_cateController extends Controller
{
	//商品分类主页
    public function getIndex()
    {
    	$goods_cates = DB::table('ms_goods_cate')->get(); 
        return view('admin/goods_cate/index',['res'=>$goods_cates]);
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
    	return redirect()->back()->withInput()->withErrors('删除成功!');
    }
    public function getUpdate(Request $request)
    {
    	$res = DB::table('ms_goods_cate')->where('id',$request->id)->update($request->except('id'));
    	echo $res;
    }
    public function getEdit($id)
    {
    	$res = DB::table('ms_goods_cate')->where('id',$id)->first();
    	return view('admin/goods_cate/edit',['res'=>$res]);
    }
}
