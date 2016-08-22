<?php

namespace App\Http\Controllers\home;
use Hash;
use Illuminate\Http\Request;
use DB;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use App\Http\Requests\LoginPostRequest;

class LoginController extends Controller
{

	//验证码 
	public function getCode(){
		  ob_clean();//清除输出缓存区的内容
		    //生成验证码图片的Builder对象，配置相应属性
	        $builder = new CaptchaBuilder;
	        //可以设置图片宽高及字体
	        $builder->build($width = 100, $height = 40, $font = null);
	        //获取验证码的内容
	        $phrase = $builder->getPhrase();
	        // dd($phrase);
	        //把内容存入session
	        session(['code'=>$phrase]);
	        //生成图片
	        header("Cache-Control: no-cache, must-revalidate");
	        header('Content-Type: image/jpeg');
	        $builder->output();
		}

	//前台登录显示界面 
	public function getIndex()
	{	
		return view('home/login/entry');
	}
	//前台注册显示界面 
	public function getZhuce()
	{	
		return view('home/login/register');
	}

	//前台密码添加显示界面 
	// public function getPass()
	// {	
	// 	return view('home/login/pass');
	// }

	//前台登录接值处理
	public function postEntry(LoginPostRequest $request)
	{

		//验证码比对
		if($request->input('code')!==session('code')){
			
			return back()->withErrors('验证码不正确');
		}
		$arr = $request->except('_token');

		if($arr['email']){	
			$res =	DB::table('ms_user')->where('email',$arr['email'])->first();
			if(!$res){
				return back()->withErrors('用户不存在,请先注册');
			}
			$pass = $res->password ;
			if(!Hash::check($request->input('password'),$pass)){			
				return back()->withErrors('用户名或密码错误');				
			}

			if($res){
				session(['user'=>$res]);
				return redirect('/');
			}else{
			return back()->withErrors('用户名或密码错误');
			}
		}else{
			return back()->withErrors('用户名 密码 不能为空');
		}
	}


	

	//前台注册接值处理
		public function postDoregister(LoginPostRequest $request)
		{

		//验证码比对
		if($request->input('code')!==session('code')){
			
			return back()->withErrors('验证码不正确');
		}
		$email = $request->input('email');
		
		//查询邮箱是否存在
		$res = DB::table('ms_user')->where('email',$email)->first();
		if($res){
			return back()->withErrors('此邮箱已被注册');		
		}else{

			return  view('home/login/pass',['email'=>$email]);

		}

	}

	//发送邮件方法
	
	public function getEmail($id, $token, $email) {
	    Mail::send('home.email.email', ['id' =>$id, 'token' =>$token, 'email' =>$email],
	    function($m) use($email) {
	        $m ->to($email) ->subject('激活邮件');
	    });
	}

	//密码插入存入数据库
	public function postPass(Request $request){

			$email =$request->input('email');
			$e = explode('@',$email);
			$ee = $e[1];
			$a = explode('.',$ee);
			$aa = $a[0];
			// dd($aa);

			// dd($ee);
			if(empty($request->input('password'))&&empty($request->input('repassword'))&&empty($request->input('username'))){
			return  view('home/login/pass',['email'=>$email])->withErrors('用户名 密码 	不能为空');
			
			}

			if($request->input('password')==$request->input('repassword') ){	           
			//处理数据
			$arr = $request->except('_token','repassword');
			// $arr['password'] = Hash::make($arr['password']);
			$arr['token'] = str_random(50);
			$arr['status'] = 1;
			$arr['password']=Hash::make($arr['password']);
			// dd($email);
			//执行数据插入
			$str = DB::table('ms_user')->insertGetid($arr);

			if($str){
				$this->getEmail($str,$arr['token'],$arr['email']);
				
			return  view('home/email/success',['email'=>$ee,'aa'=>$aa]);

			}else{
				return redirect(url('home/login/register'))->withErrors('注册失败,请联系管理员');
			
			}

			}else{
			
			return  view('home/login/pass',['email'=>$email])->withErrors('两次密码不一致');
				
			}			
	} 


	//激活邮件链接传值比对

		public function getActivation(Request $request) {
	    $arr = $request ->all();
	    $str = DB::table('ms_user') ->where('id', $request['id']) ->first();
	    if ($str) {
	        if ($request['id'] == $str ->id && $request['token'] == $str ->token) {
	            $arr['token'] = str_random(50);
	            $arr['status'] = 2;	            
	            //执行数据插入
	            $strr = DB::table('ms_user') ->where('id', $arr['id']) ->update(['token' =>$arr['token'], 'status' =>$arr['status']]);
	            session(['user'=>$str]);
	            return redirect(url('home/login/success'));
	        } else {

	            return redirect(url('home/login/error'));
	        }

	    } else {
	        return redirect(url('home/login/error'));

	    }
	}

	//邮件发送成功
	
	public function getSuccess() {
	    return view('home/email/success');

	}
	//邮件激活

	public function getSuccess2() {
	    return view('home/email/success2');

	}
	//邮件激活失败
	
	public function getError() {
	    return view('home/email/error');

	}


	

//////////////////////////////////////////////找回密码//////////////////////////////////////////////////////////
	//密码重置显示界面 
	public function getResetpassword()
	{	
		return view('home/login/resetpassword');
	}


	// 找回密码邮箱验证
	public function postResetpassadd(LoginPostRequest $request)
	{	
		
		//验证码比对
		if($request->input('code')!==session('code')){
			
			return back()->withErrors('验证码不正确');
		}
		$sre = DB::table('ms_user')->where('email',$request->input('email'))->first();
		$arr = $arr['token'] = str_random(50);

		$id = $sre->id;
		$ss = DB::table('ms_user')->where('id',$id )->update(['token' => $arr]);
		$email =$request->input('email');
		$e = explode('@',$email);
		$ee = $e[1];
		$a = explode('.',$ee);
		$aa = $a[0];
			if($sre&&$ss){											
			$this->getResetemail($id,$arr,$request->input('email'));					
			return  view('home/email/success',['email'=>$ee,'aa'=>$aa]);

			}else{
				return back()->withErrors('用户不存在');
			}
			
		
	}
 



	 //重置密码邮件发送
	public function getResetemail($id, $token, $email) {
	    Mail::send('home.email.resetemail', ['id' =>$id, 'token' =>$token, 'email' =>$email],
	    function($m) use($email) {
	        $m ->to($email) ->subject('重置密码');
	    });
	}

	// 邮箱链接接值比对
	public function getReset(Request $request){
		// dd($request->all());
		$id = $request->input('id');
		$token = $request->input('token');
		$email = $request->input('email');

		if($request->all()){

			$sre = DB::table('ms_user')->where('id',$id)->first();
			$token1 =$sre->token; 
			$id1 =$sre->id; 
			if($token1==$token&&$id1==$id){
				 $ar = $ar['token'] = str_random(50);
				$ss = DB::table('ms_user')->where('id',$id )->update(['token' => $ar]);
				return view('home/login/resetpass',['email'=>$email]);
				
			}else{
				return redirect(url('home/login/register'))->withErrors('修改失败,请联系管理员');

			}
			
		}else{

			return redirect(url('home/login/register'))->withErrors('修改失败,请联系管理员');
						
		}
	}



//密码插入存入数据库
	public function postAddpass(Request $request){	
		if(empty($request->input('password'))&&empty($request->input('repassword'))){
		return  view('home/login/pass',['email'=>$email])->withErrors('密码不能为空');
		
		}

		if($request->input('password')==$request->input('repassword') ){	           
		//处理数据
		$arr = $request->except('_token','repassword');
			// dd($arr);		
		$ar=Hash::make($arr['password']);
	
		//执行数据插入
		$str = DB::table('ms_user')->where('email',$request->input('email'))->update(['password' => $ar]);
		
		if($str){
			
			
		return  view('home/email/success2');

		}else{
			return redirect(url('home/login/register'))->withErrors('注册失败,请联系管理员');
		
		}

		}else{
		
		return  view('home/login/pass',['email'=>$email])->withErrors('两次密码不一致');
			
		}			
	} 
	public function getLogout(Request $request)
	{
		$request->session()->forget('user');
		return redirect('/');
	}



 }