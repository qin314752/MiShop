<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getAdd()
    {
        return view('admin.user.add',['title'=>'添加用户']);
    }
    public function postInsert(Request $request)
    {

    }
}
