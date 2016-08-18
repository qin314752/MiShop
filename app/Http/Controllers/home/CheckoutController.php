<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function getPay()
    {
        $addrs = DB::table('ms_user_addr')->join('ms_user','ms_user_addr.uid','=','ms_user.id')->select('ms_user_addr.tel as tel','username','addr','isdefault','ms_user_addr.id')->get(); 
        // dd($addrs);

        $goods =session('cart');
        $data = [];
       if(!empty($goods)){
            foreach ($goods as $k => $v) 
            {
            // dd($v);
            $tmp = DB::table('ms_goods')->where('id',$v['id'])->first();
            $tmp->num=$v['num'];
            $data[] = $tmp;
        }
       }
       // dd($data);
        return view('home/checkout/pay',['addrs'=>$addrs,'data'=>$data]);
    }
    public function postOrder(Request $request)
    {
        $data = $request->except('_token');
        $data['pay_status'] = 1;
        $data['order_code'] = date('YmdHis').uniqid();
        // dd($data);
        $res = DB::table('ms_order')->insert($data);
        if($res)
        {
            return redirect(url('/checkout/payed'));
        }
        else{
            return back()->withErrors('订单失败');
        }
    }
    public function getPayed()
    {
        return view('/home/checkout/payed');
    }
}
