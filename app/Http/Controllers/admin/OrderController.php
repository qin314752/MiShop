<?php

namespace App\Http\Controllers\admin;
use Hash;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
	public function getIndex(Request $request)
	{
		//查询所有数据
		// $res=DB::table('ms_order')->get();
		$num=$request->input('num',5);
		//查询数据库 使用分页
		if($request->input('sousuo')){
			$order=DB::table('ms_order')->where('uid','like','%'.$request->input('sousuo').'%')->paginate($num);
		}else{
			$order=DB::table('ms_order')->paginate($num);
		}
		
		// dd($request->all());
		return view('admin.order.index',['order'=>$order,'request'=>$request->all()]);
	}
	//删除
	public function getDelete(Request $request)
	{
		$id=$request->input('id');
		$res=DB::table('ms_order')->where('id',$id)->delete();
		if($res){
			return redirect('/admin/order/index')->with('success','删除成功');
		}else{
			return back()->with('error','删除失败');
		}
	}
	//修改
	public function getEdit(Request $request)
	{
		$id=$request->input('id');
		//通过id查询
		$order=DB::table('ms_order')->where('id',$id)->first();
		//解析模板
		return view('admin.order.edit',['order'=>$order]);
	}
	public function getUpdate(Request $request)
	{
		// dd($request->all());
		$data=$request->except(['_token','id']);
		$id=$request->input('id');
		//数据修改
		$res=DB::table('ms_order')->where('id',$id)->update($data);
		if($res){
			return redirect('/admin/order/index')->with('success','修改成功');
		}else{
			return back()->with('error','修改失败');
		}
	}


}