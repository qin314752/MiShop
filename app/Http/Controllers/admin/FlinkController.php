<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class FlinkController extends Controller
{
    //友情链接数据查询
     public function getIndex(Request $request)
    {



    	$num = $request->input('num',5);

    	$arr=DB::table('ms_flink')->where(function($query) use($request){
    			if($request->input('name')){
    				$query->where('name','like','%'.$request->input('name').'%');
    			}
    	})->paginate($num);

    	return view('admin/flink/index',['arr'=>$arr,'num'=>$num,'name'=>$request->input('name')]);
    	
    }
	//友情链接数据删除
	public  function getDelete(Request $request)
	{
		$id = $request->id;


		// echo $id;
		$str = DB::table('ms_flink')->where('id', '=', $id)->delete();
		// dd($str);
	 
		if($str){
			echo 1;
		}else{
			echo 0;
		}		
	}

	//友情链接修改网站名
	
	public function getUpdate(Request $request){
		$id = $request->id;
		$name = $request->name;
		$str = DB::table('ms_flink')->where('id',$id)->update(['name'=>$name]);
		if($str){
			echo 1;
		}else{
			echo 0;
		}	
		
}
	// 友情链接修改域名
	public function getUpdate1(Request $request){
		$id = $request->id;
		$url = $request->url;
		$str = DB::table('ms_flink')->where('id',$id)->update(['url'=>$url]);
		if($str){
			echo 1;
		}else{
			echo 0;
		}	
		

	}


	//友情链接添加跳转页面
	public  function getAdd()
	{
		return view('admin.flink.add');
	}




	//友情链接提交接值处理
	public function postInsert(Request $request){
		$arr = $request->only(['name','url']);
		$name= $arr['name'];
		$url = $arr['url']; 
		$src = DB::table('ms_flink')->insert(['name'=>$name,'url'=>$url]);
		
			if($src){

			return redirect(url("admin/flink/index"));
			}else{
				return back();
			}

	}


























}
