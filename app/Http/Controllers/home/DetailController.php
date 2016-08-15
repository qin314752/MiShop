<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    
    public function getIndex($id)
    {
        // echo $id;
        $good = DB::table('ms_goods')->where('id',$id)->first();

        return view('home/detail/index',['good'=>$good]);
    }
}
