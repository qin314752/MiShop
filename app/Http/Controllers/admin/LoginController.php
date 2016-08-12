<?php

namespace App\Http\Controllers\admin;
use Hash;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
	//后台登录
	public function getIndex()
	{
			return view('admin/login/login
				');
	}

	public  function postDologin(Request $request)
	{
		$arr = $request->except('_token');
		// dd($arr);
		//检测上传数据
		$user = DB::table('ms_user')->where('username',$request->username)->first();
		
		if($user){


		if(Hash::check($request->input('password'), $user->password)) {

			session(['id'=>$user->id]);
				return redirect('admin/user/')->with('success','欢迎'.$user->username.'登陆');

		}else{
				return back()->with('error','用户名或密码错误');

			}

		}else{
			return back()->with('error','用户名或密码错误');
		}
	}


}