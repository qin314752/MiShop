<?php
namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Goods_cateController extends Controller
{
	//商品分类主页
    public function getIndex(Request $request)
    {
        $num = $request->input('num',5);
    	$goods_cates = DB::table('ms_goods_cate')->select(DB::raw("*,CONCAT(path,',',pid) AS paths"))
        ->where(function($query) use ($request)
        {
            if ($request->search != '') 
            {
                $query->where('name','like','%'.$request->search.'%');
            }
        })
        ->orderBy("format_path")->paginate($num); 
        return view('admin/goods_cate/index',['res'=>$goods_cates,'num'=>$num,'search'=>$request->search]);
    }
    //添加商品分类
    public function getAdd()
    {
        $res = DB::table('ms_goods_cate')->get();
        return view('admin/goods_cate/add',['res'=>$res]);
    }
    public function postInsert(Request $request)
    {
    	$cates = $request->except(['_token']);
    	if($cates['pid']==0){
    		$cates['path']=0;
    		$cates['format_path'] = '顶级分类--'.$cates['name'];
    	}
    	else{
            $res = DB::table('ms_goods_cate')->where('id',$cates['pid'])->first();
            $cates['format_path'] = $res->format_path.'--'.$cates['name'];
            $cates['path'] = $res->path.','.$cates['pid'];
    	}
    	$res = DB::table('ms_goods_cate')->insert($cates);
    	return redirect(url('admin/goods_cate'));
    }
    public function getDelete($id)
    {
        $re = DB::table('ms_goods_cate')->get();
            foreach($re as $k=>$v){
                if($id == $v->pid){
                    return back()->with('error','该类下有子分类,不允许删除');
                }
            }
        $res = DB::table('ms_goods_cate')->where('id',$id)->delete();
        if($res){
            return redirect('/admin/goods_cate/index')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
    public function postUpdate(Request $request)
    {
        // dd($request->all());
        $data=$request->except('sid','_token');
        $sid=$request->input('sid');
        $res = DB::table('ms_goods_cate')->where('id',$request->sid)->update($request->except(['sid','_token']));
        // if($res){
        //      $res['format_path'] = $res['format_path'].'--'.$data['name'];
        // }
        // dd($res);
        return redirect(url("admin/goods_cate"));
    	
    }
    public function getEdit($id)
    {
    	$res = DB::table('ms_goods_cate')->where('id',$id)->first();
    	return view('admin/goods_cate/edit',['res'=>$res]);
    }
    //获取格式化分类信息
    public static function Cate($arr,$id)
    {
        $res = [];
        foreach ($arr as $key => $value) 
        {
                if ($value->pid == $id)
               {        
                   $value->sub = self::Cate($arr,$value->id);
                $res[] = $value;
               }
        }
        return $res;
    }
    public static function cates()
    {
        $res = DB::table('ms_goods_cate')->get();
        return $res;
    }
}
