<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
    	return view('dashboard');
    }

    public function style($style){
    	session(['style'=>$style]);

    	return redirect()->back()->with('success','Thy đổi style thành công');
    }
}
