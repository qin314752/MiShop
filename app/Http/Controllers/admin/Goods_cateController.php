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
        ->orderBy("format_path")->paginate($num); 
        return view('admin/goods_cate/index',['res'=>$goods_cates,'num'=>$num,'search'=>$request->search]);
    }
    //添加商品分类
    public function getAdd()
    {
        $res = DB::table('ms_goods_cate')->get();
        return view('admin/goods_cate/add',['res'=>$res]);
    }
    public function postInsert(Request $request)
    {
    	$cates = $request->except(['_token']);
        $res = DB::table('ms_goods_cate')->where('id',$cates['pid'])->first();
        $cates['format_path'] = $res->format_path.'--'.$cates['name'];
        $cates['path'] = $res->path.','.$cates['pid'];
    	$res = DB::table('ms_goods_cate')->insert($cates);
    	return redirect(url('admin/goods_cate'));
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
    //获取格式化分类信息
    public static function Cate($arr,$id)
    {
        $res = [];
        foreach ($arr as $key => $value) 
        {
                if ($value->pid == $id)
               {        
                   $value->sub = self::Cate($arr,$value->id);
                $res[] = $value;
               }
        }
        return $res;
    }
    private static function cates()
    {
        $res = DB::table('ms_goods_cate')->get();
        return $res;
    }
}
