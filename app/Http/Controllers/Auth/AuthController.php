<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\QuanTri;

class AuthController extends Controller
{
    public function getLogin(){
    	return view('auth.login');
    }

     public function postLogin(Request $request){

     	$arRequests = $request->all();

    	$username = $arRequests['username'];
    	$password = $arRequests['password'];
    	
    	$password = bcrypt($password);

    	if (Auth::attempt(['username' => $username, 'password' => $password])) {

    		echo "Đúng";die();
            return redirect()->route('admin.index.index');
        }else{
        	echo "Sai";die();
        	$request->session()->flash('msg', 'Sai username hoặc password');
        	return redirect()->route('auth.auth.login');
        }
    }
}
