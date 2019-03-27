<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function postLogin(Request $request){
    	$arr = [
    		'name'=>$request->name,
    		'password'=>$request->password
    	];
    	if(Auth::attempt($arr)){
    		dd('thành công');
    	}
    	else{
    		return redirect('admin/login');
    	}
    }

    public function getLogin(){
    	return view('admin.login');
    }
}
