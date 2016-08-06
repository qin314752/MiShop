<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
    public function getIndex()
    {
    	// echo 11;
        return view('layout.index');
    }
}
