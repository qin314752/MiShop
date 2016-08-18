<?php

namespace App\Http\Controllers\home;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginPostRequest;

class CartController extends Controller
{						

	public function getInsert(Request $request)
	{
		$data=$request->only(['id']);
		$data['num'] = 1;
		if($this->checkcart($data['id']))
		{
			$goods = session('cart');
			foreach ($goods as $k => $v) {
				if ($v['id']==$data['id']) {
					$goods[$k]['num']+=$data['num'];
				}
			}
			// dd($goods);
			//
			session(['cart' => $goods]);
		}else{

		$request->session()->push('cart',$data);
		}
		return 1;
	}



	private function checkcart($id)
	{
		$goods = session('cart');
		if(empty($goods)){
			return false;
		}

		foreach ($goods as $k => $v) {
			if($v['id']==$id){
				return true;
			}
		}
		//商品不在购物车
		return false;

	}



	public function getIndex()
	{
		$goods =session('cart');
       	$data = [];
       if(!empty($goods)){
	       	foreach ($goods as $k => $v) {
	       	$tmp = DB::table('ms_goods')->where('id',$v['id'])->first();
	       	$tmp->num=$v['num'];
	       	$data[] = $tmp;
       	}
       }
       // dd($data);
       return view('/home/carts/cart',['data'=>$data] );
	}

	//清空购物车
	public function getClear(Request $request)
	{
		$request->session()->flush();
	} 



	//修改添加
	public function getAdd(Request $request)
	{	
		$data=$request->only(['id','num']);
		if($this->checkcart($data['id']))
		{
			$goods = session('cart');
			// dd($goods);
			foreach ($goods as $k => $v) {
				if ($v['id']==$data['id']) {

					$goods[$k]['id']=$data['id'];
					$goods[$k]['num']=$data['num'];
				}
			}
			//
			session(['cart' => $goods]);
			// dd($goods);
		}else{

		$request->session()->push('cart',$data);
		}

	}
	public function getDel(Request $request)
		{	
			$data=$request->only(['id']);
			// dd($data);
				$goods = session('cart');
				// dd($goods);
				foreach ($goods as $k => $v) {
					if ($v['id']==$data['id']) {
					
						unset($goods[$k]);
							
					}
				}
				//
				session(['cart' => $goods]);
				echo 1;
				// dd($goods);
			


		}




}