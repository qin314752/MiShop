<?php

namespace App\Http\Controllers\home;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginPostRequest;

class CommucController extends Controller
{

	public function getIndex(Request $request)
	{
        $res['pic']=self::upload($request);
        //用户下的所有订单
        $uid=session('user')->id;
        $res=DB::table('ms_order')->where('uid',$uid)->get();
        $goods = [];
        foreach($res as $k=>$v)
        {
            $num=$request->input('num',5);
            //查询数据库 使用分页
            if($request->input('keywords')){
                $good = DB::table('ms_order_goods')
                ->join('ms_goods','ms_order_goods.goods_id','=','ms_goods.id')
                ->where('order_id',$v->order_code)
                ->where('name','like','%'.$request->input('keywords').'%')
                ->paginate($num);
            }else{
                $good = DB::table('ms_order_goods')
                ->join('ms_goods','ms_order_goods.goods_id','=','ms_goods.id')
                ->where('order_id',$v->order_code)
                ->paginate($num);
            }
                $goods[] = $good;
        }
        // dd($goods);
        $good=DB::table('ms_goods_comment')->get();
        foreach($good as $k=>$v)
        {
            $id=$v->goods_id;
        }
        return view('home.comment.comment',['goods'=>$goods,'request'=>$request->all(),'id'=>$id]);
	}
    public function getAdd(Request $request)
    {
        // dd($request->all());
        // $comm=DB::table('ms_goods_comment')->get();
        // dd($comm);
        // foreach($comm as $k=>$v)
        // {
        //     $goods_id=$comm['goods_id'];
        // }
        // dd($goods_id);
        $data=$request->only('content','goods_id');
        $data['uid'] = session('user')->id;
        $data['time']=date('Y-m-d H:i:s',time());
        // $data['pic']=self::upload($request);
        $user=DB::table('ms_user')
        ->join('ms_goods_comment','ms_user.id','=','ms_goods_comment.uid')
        ->get(); 
        
        $res=DB::table('ms_goods_comment')->insert($data);
        if($res){
            return back()->with('success','评论成功');
        }else{
            return back()->with('error','评论失败');
        }
     }
    //图片上传
     public static function upload(Request $request)
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