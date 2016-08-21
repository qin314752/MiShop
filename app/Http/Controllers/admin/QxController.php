<?php
namespace App\Http\Controllers\admin;
use Hash;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class QXController extends Controller
{
	public function getIndex(Request $request)
	{
		$num=$request->input('num',5);
		//查询数据库 使用分页
		if($request->input('sousuo')){
			$user=DB::table('ms_qx')->where('username','like','%'.$request->input('sousuo').'%')->paginate($num);
		}else{
			$user=DB::table('ms_qx')->paginate($num);
		}
		return view('admin.qx.index',['user'=>$user,'request'=>$request->all()]);
	}
	public function getAdd(Request $request)
	{
		return view('admin.qx.add',['title'=>'后台权限添加']);
	}
	public function postInsert(Request $request)
	{
		// dd($request->all());
		$data=$request->except('_token');
		$data['time']=date('Y-m-d H:i:s',time());
		$qx=DB::table('ms_qx')->insert($data);
		if($qx){
			return redirect('/admin/qx/index')->with('success','添加成功');
		}else{
			return back()->with('error','添加失败');
		}
	}
	public function getDelete(Request $request)
	{
		$id=$request->input('id');
		$res=DB::table('ms_qx')->where('id',$id)->delete();
		if($res){
			return back()->with('success','删除成功');
		}else{
			return back()->with('error','删除失败');
		}
	}
		public function getEdit(Request $request)
	{
		$id=$request->input('id');
		//通过id查询
		$qx=DB::table('ms_qx')->where('id',$id)->first();

		// dd($user);
		//解析模板
		return view('admin.qx.edit',['qx'=>$qx]);

	}
	//修改
	public function postUpdate(Request $request)
	{
		// dd($request->all());
		$data=$request->except('_token','id');
		$id=$request->input('id');
		//数据修改
		$res=DB::table('ms_qx')->where('id',$id)->update($data);
		if($res){
			return redirect('/admin/qx/index')->with('success','修改成功');
		}else{
			return back()->with('error','修改失败');
		}
	}

}