<?php

namespace App\Http\Controllers\home;
use Hash;
use Illuminate\Http\Request;
use DB;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
class UcenteController extends Controller
{
	public function getIndex()
	{	
		$id = session('user')->id;
		// dd(session('user'));
		$user = DB::table('ms_user')->where('id',$id)->first();
		return view('home/ucenter/index',['user'=>$user]);
	}

	public function getSele()
	{	
		$id = session('user')->id;
		$user = DB::table('ms_user')->where('id',$id)->first();
		return view('home/ucenter/user',['user'=>$user]);
	}

	public function getUser(){
		$id = session('user')->id;
		$user = DB::table('ms_user')->where('id',$id)->first();
		return view('home/ucenter/user',['user'=>$user]);
	}


	//头像上传
	public function postImg(Request $request)
	{
		// $pic = $request->all();
		// dd($img);
		//处理图片上传
		$pic=$this->upload($request);
		$id = session('user')->id;
		
		$user = DB::table('ms_user')->where('id',$id)->update(['pic'=>$pic]);
		// dd($user);
		if($user){

			return redirect(url('ucenter/user'));
		}else{
			return back();
			
		}

	}


//修改
	public function postUpdate(Request $request)
	{
		$user = $request->only(['username','tel']);
		if($request->input('sex')==1){
			$user['sex']='女';	
		}else{
			$user['sex']='男';	

		}	
		$id = session('user')->id;
		$str = DB::table('ms_user')->where('id',$id)->update(['username'=>$user['username'],'tel'=>$user['tel'],'sex'=>$user['sex']]);
		
		if($str){
			return  redirect(url('/ucenter/sele/'));
		}else{
			return  back();
		
		}


	}

	//图片上传
	 public function upload(Request $request)
    {
    	// 检测是否有文件上传
    	if($request->hasFile('pic')){
            //随机文件名称 加密
            $name = md5(time()+rand(11111,99999));
            // 文件后缀名的获取
            $suffix = $request->file('pic')->getClientOriginalExtension();
            // 判断文件上传的类型
            $arr = ['jpg','JPG','png','gif'];
            if(!in_array($suffix,$arr)){
                 '上传文件不符合要求';die;
            }
            $request->file('pic')->move('./uploads/',$name.'.'.$suffix);
            // 将文件路径及文件名称返回
            return '/uploads/'.$name.'.'.$suffix;
       }

    }
















 }