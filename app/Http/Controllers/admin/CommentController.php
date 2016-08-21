<?php
namespace App\Http\Controllers\admin;
use Hash;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class CommentController extends Controller
{
	public function getIndex(Request $request)
	{
		//查询所有数据
		// $data=DB::table('ms_goods_comment')
		// ->join('ms_goods', 'ms_goods_comment.goods_id', '=', 'ms_goods.id')
		// ->join('ms_user', 'ms_goods_comment.uid', '=', 'ms_user.id')
		// ->select('ms_goods_comment.*','ms_goods.id as gid','ms_user.id as uid','ms_user.username','ms_goods.name')
		// ->get();
		// dd($data);
		$num=$request->input('num',5);
		//查询数据库 使用分页
		if($request->input('keywords')){
			$goods=DB::table('ms_goods_comment')
			->join('ms_goods', 'ms_goods_comment.goods_id', '=', 'ms_goods.id')
			->join('ms_user', 'ms_goods_comment.uid', '=', 'ms_user.id')
			->select('ms_goods_comment.*','ms_goods.id as gid','ms_user.id as uid','ms_user.username','ms_goods.name')
			->where('content','like','%'.$request->input('keywords').'%')
			->paginate($num);
		}else{
			$goods=DB::table('ms_goods_comment')
			->join('ms_goods', 'ms_goods_comment.goods_id', '=', 'ms_goods.id')
			->join('ms_user', 'ms_goods_comment.uid', '=', 'ms_user.id')
			->select('ms_goods_comment.*','ms_goods.id as gid','ms_user.id as uid','ms_user.username','ms_goods.name')
			->paginate($num);
		}
		return view('admin.comment.index',['goods'=>$goods,'request'=>$request->all()]);
	}
	public function getDelete(Request $request)
	{
		$id=$request->input('id');	
		$res=DB::table('ms_goods_comment')->where('id',$id)->delete();
		if($res){
			return back()->with('success','删除成功');
		}else{
			return back()->with('error','删除失败');
		}
	}
	public function getEdit(Request $request)
	{
		$id=$request->input('id');	
		$goods=DB::table('ms_goods_comment')->where('id',$id)->first();
		return view('admin.comment.edit',['goods'=>$goods]);
	}
	public function postUpdate(Request $request)
	{
		// dd($request->all());
		$data=$request->except('_token','id');
		$id=$request->input('id');	
		$res=DB::table('ms_goods_comment')->where('id',$id)->update($data);
		if($res){
			return redirect('/admin/comment/index')->with('success','修改成功');
		}else{
			return back()->with('error','修改失败');
		}
	}
}