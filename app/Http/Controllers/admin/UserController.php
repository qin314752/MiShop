<?php

namespace App\Http\Controllers\admin;
use Hash;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	//后台用户添加
	public function getAdd()
	{
		return view('admin.user.add',['title'=>'后台用户添加']);
	}
	//表单提交添加数据
	public function postInsert(Request $request)
	{
		//检测数据 laravel表单验证 自东闪存 当前请求对象 request,验证规则,错误信息
	  $this->validate($request, [
	    'username' => 'required',
	    'password' => 'required|regex:/\w{6,18}/',
	    'email'=>'required|email',
	    'tel'=>'required|regex:/1[3-8]\d{9}/',
	],[
		'username.required'=>'用户名不能为空',
		'password.required'=>'密码不能为空',
		'password.regex'=>'密码格式不符合要求',
		'email.required'=>'邮箱不能为空',
		'tel.required'=>'手机号不能为空',
		'email'=>'邮箱格式不符合要求',
		'tel.regex'=>'手机格式不符合要求',
	]);                                                         
		//提取其他数据
		$data=$request->only(['username','password','email','tel']);
		//随机token
		$data['token']=str_random(50);
		//状态  未激活
		$data['status']=1;
		//加密密码
		$data['password']=Hash::make($data['password']);
		// dd($data);
		//处理图片上传
		$data['pic']=$this->upload($request);
		// dd($data); 
		//数据插入
		$res=DB::table('ms_user')->insert($data);
		if($res){
			return redirect('/admin/user/index')->with('success','添加成功');
		}else{
			return back()->with('error','添加失败');
		}
		// dd($request->all());
	}
	//用户列表
	public function getIndex(Request $request)
	{

		// echo '主页index'
		//查询所有数据
		// $user=DB::table('user')->get();
		//获取分页的条数大小
		$num=$request->input('num',5);
		//查询数据库 使用分页
		if($request->input('sousuo')){
			$user=DB::table('ms_user')->where('username','like','%'.$request->input('sousuo').'%')->paginate($num);
		}else{
			$user=DB::table('ms_user')->paginate($num);
		}
		
		// dd($request->all());
		return view('admin.user.index',['user'=>$user,'request'=>$request->all()]);
	}
	//ajax用户删除
	public function getDelete(Request $request)
	{
		//id
		$id=$request->input('id');
		//执行删除
		$res=DB::table('ms_user')->where('id',$id)->delete();
		if($res){
			echo 1;
		}else{
			echo 2;
		}

	}
	//用户修改
	public function getEdit(Request $request)
	{
		// echo '3333333';
		$id=$request->input('id');
		//通过id查询
		$user=DB::table('ms_user')->where('id',$id)->first();

		// dd($user);
		//解析模板
		return view('admin.user.edit',['user'=>$user]);

	}
	//修改
	public function getUpdate(Request $request)
	{
			// dd($request->all());
		$data=$request->except('_token','id');
		// dd($data);
		$id=$request->input('id');

		//数据修改
		$res=DB::table('ms_user')->where('id',$id)->update($data);
		if($res){
			return redirect('/admin/user/index')->with('success','修改成功');
		}else{
			return back()->with('error','修改失败');
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
            $arr = ['jpg','png','gif'];
            if(!in_array($suffix,$arr)){
                echo '上传文件不符合要求';die;
            }
            $request->file('pic')->move('./uploads/',$name.'.'.$suffix);
            // 将文件路径及文件名称返回
            return '/uploads/'.$name.'.'.$suffix;
       }

    }





}