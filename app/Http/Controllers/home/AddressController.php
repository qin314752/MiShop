<?php

namespace App\Http\Controllers\home;
use Hash;
use Illuminate\Http\Request;
use DB;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
class AddressController extends Controller
{
	public function getIndex()
	{	
		$arr = DB::table('ms_user_addr')->get();
		return view('home/address/index',['arr'=>$arr]);
	}

	public function postInsert(Request $request)
	{
		
		$arr = $request->except('_token','sheng','shi','xian','jiedao');
		$arr['uid'] = session('user')->id;
		if(!empty($arr['isdefault'])){
			DB::table('ms_user_addr')->where('uid',$arr['uid'])->where('isdefault',$arr['isdefault'])->update(['isdefault'=>0]);
		}
		$str = DB::table('ms_user_addr')->insert($arr);
		if($str){
			return back();
		}else{
			return back()->with('error','添加失败');
		}

	}

	//删除
	public function getDel(Request $request)
	{
		$id = $request->only('id');
		$str = DB::table('ms_user_addr')->where('id',$id['id'])->delete();
		if($str){
			echo 1;
		}else{
			echo 2;
		}
	}

//修改
	public function postUpd(Request $request)
	{
		$arr = $request->only('id','uname','tel','addr');
		$arr['uid'] = session('user')->id;
		// $arr['uid'] = '';
		// dd($arr);
		$str = DB::table('ms_user_addr')->where('id', $arr['id'])->update(['uid' =>$arr['uid'],'tel'=>$arr['tel'],'addr'=>$arr['addr'],'uname'=>$arr['uname'] ]);
		
		if($str){
			return redirect(url('/addr'));
		}else{
			return back()->with('error','修改失败');
		}
	}

//修改默认地址属性
public function getUpde(Request $request)
{	
	$arr = $request->all();

	// dd($arr);
	$uid = session('user')->id;
	DB::table('ms_user_addr')->where('uid',$uid)->update(['isdefault'=>0]);
	$str = DB::table('ms_user_addr')->where('id',$arr['id'])->update(['isdefault'=>1]);
	// dd($str);
	if($str==1){
		echo 1;
		// return back();
			// return redirect(url('/addr'));		
	}else{
		echo 2;
		// return back()->with('error','修改失败');

	}
}











 }