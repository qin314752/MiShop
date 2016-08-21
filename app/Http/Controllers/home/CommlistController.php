<?php

namespace App\Http\Controllers\home;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginPostRequest;

class CommlistController extends Controller
{


    public function getIndex(Request $request)
    {
        // dd($request->all());
        $id = $request->id;
        
        //查询数据库 使用分页
        if($request->input('keywords')){
             $data=DB::table('ms_goods_comment')
            ->join('ms_user', 'ms_user.id', '=', 'ms_goods_comment.uid')
            ->join('ms_goods','ms_goods_comment.goods_id','=','ms_goods.id')
            ->where('goods_id',$id)
            ->get()
            ->where('content','like','%'.$request->input('keywords').'%');
        }else{
             $data=DB::table('ms_goods_comment')
            ->join('ms_user', 'ms_user.id', '=', 'ms_goods_comment.uid')
            ->join('ms_goods','ms_goods_comment.goods_id','=','ms_goods.id')
            ->where('goods_id',$id)
            ->get();
        }
        // dd($data);
        return view('home.comment.index',['data'=>$data,'request'=>$request->all()]);
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