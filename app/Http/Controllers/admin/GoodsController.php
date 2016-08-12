<?php
namespace App\Http\Controllers\admin;
use Hash;
use Illuminate\Http\Request;
use DB;
// use App\Model\Goods;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class GoodsController extends Controller
{
	//后台主页
	public function getIndex(Request $request)
	{
		$num=$request->input('num',5);
		//查询数据库 使用分页
		if($request->input('keywords')){
			$goods=DB::table('ms_goods')->where('name','like','%'.$request->input('keywords').'%')->paginate($num);
		}else{
			$goods=DB::table('ms_goods')->paginate($num);
		}
		// dd($goods);
		return view('admin.goods.index',['goods'=>$goods,'request'=>$request->all()]);
	}
	//数据添加
	public function getAdd(Request $request)
	{
		//获取格式化分类数据
		$goods=Goods_cateController::cates();
		return view('admin.goods.add',['goods'=>$goods]);
	}
	public function postInsert(Request $request)
	{
		// dd($request->all());
		$data=$request->except('_token');
		$data['pic']=$this->upload($request);
		// dd($data);
		$res = DB::table('ms_goods')->insert($data);
		// dd($res);
		if($res){
			return redirect('/admin/goods/index')->with('success','添加成功');
		}else{
			return back()->with('error','添加失败');
		}
	}
	//删除
	public function getDelete(Request $request)
	{
		$id=$request->input('id');
		$res=DB::table('ms_goods')->where('id',$id)->delete();
		if($res){
			return back()->with('success','删除成功');
		}else{
			return back()->with('error','删除失败');
		}
	}
	//修改
	public function getEdit(Request $request)
	{
		$id=$request->input('id');
		//通过id查询
		$goods=DB::table('ms_goods')->where('id',$id)->first();
		//获取格式化分类数据
		$cates=Goods_cateController::cates();
		
		//解析模板 分配数据
		return view('admin.goods.edit',['goods'=>$goods,'cates'=>$cates]);
	}
	public function postUpdate(Request $request)
	{
		// dd($request->all());
		// dd($pic);
		$data=$request->except('_token','id');
		$data['pic']=$this->upload($request);
		// dd($data);
		if(empty($data['pic'])){
			$info=DB::table('ms_goods')->first();
    		$data['pic'] = $info->pic;
    	}
    	if(empty($data['descri'])){
			$info=DB::table('ms_goods')->first();
    		$data['descri'] = $info->descri;
    	}
		$id=$request->input('id');
		// dd($id);
		//数据修改
		$res=DB::table('ms_goods')->where('id',$id)->update($data);
		// dd($res);
		if($res){
			return redirect('/admin/goods/index')->with('success','修改成功');
		}else{
			return back()->with('error','修改失败');
		}
	}
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
            return  '/uploads/'.$name.'.'.$suffix;
       }
    }
}