<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class NavController extends Controller
{
	public function getIndex(Request $request)
	{
		//主页分页搜索显示
		$num = $request->input('num',5);
    	$navs = DB::table('ms_nav_list')
    	->where(function($query ) use ($request)
    	{
    		if ($request->search != '') 
    		{
    			$query->where('name','like','%'.$request->search.'%');
    		}
    	})
    	->orderBy('id')->paginate($num); 
        return view('admin/nav/index',['navs'=>$navs,'num'=>$num,'search'=>$request->search]);
    }
    //显示添加页面
    public function getAdd()
    {
    	return view('admin/nav/add');
    }
    //插入新记录
	public function postInsert(Request $request)
	{
		// dd($request);
		$data = $request->only('name');
		$res = DB::table('ms_nav_list')->insert($data);
		if ($res) 
		{
			return redirect('admin/nav/add')->withErrors('添加成功!');
		}
		else
		{
			return back()->withErrors('添加失败!');
		}
	}
	public function getEdit($id)
	{
		$data = DB::table('ms_nav_list')->where('id',$id)->first();
		return view('admin/nav/edit',['nav'=>$data]);
	}
	public function getDelete($id)
	{
		//按分类查询商品 如果导航菜单下有商品则不允许删除
		$res = DB::table('ms_goods')->where('nav_list_id',$id)->get();
		// dd($res);
		if ($res) 
		{
			return back()->withErrors('该导航下有商品,不允许删除!');
		}
		$res = DB::table('ms_nav_list')->where('id',$id)->delete();
		if ($res) {
			return back()->withErrors('删除成功!');
		}
		else
		{
			return back()->withErrors('删除失败!');
		}
	}
}
