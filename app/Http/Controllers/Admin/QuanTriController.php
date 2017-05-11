<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\QuanTri;
use App\BaiViet;

class QuanTriController extends Controller
{
    
    public function index(){

    	$arQuanTris = QuanTri::orderBy('id', 'desc')->paginate(10);
        $arDemBaiViet = DB::table('baiviet as b')
        ->join('quantri as q', 'b.id_qt', '=', 'q.id')
        ->groupBy('fullname_qt')
        ->select('fullname_qt','id_qt', "count(id_post)")
        ->select('fullname_qt',DB::raw('count(*) as baiviet'))
        ->get(); 

        $arDemQuanTri = DB::table('quantri')
        ->groupBy('id_chuc')
        ->select('id_chuc',DB::raw('count(*) as dem'))
        ->get();  

    	return view('admin.quantri.index', ['arQuanTris' => $arQuanTris, 'arDemBaiViet' => $arDemBaiViet, 'arDemQuanTri' => $arDemQuanTri]);
    }
    public function add(Request $request){
    	$arRequests = $request->all();

    	$username_qt = $arRequests['username_qt'];
    	$fullname_qt = $arRequests['fullname_qt'];
    	$mail_qt = $arRequests['mail_qt'];
    	$password_qt = $arRequests['password_qt'];
    	$id_chuc = $arRequests['id_chuc'];

        $checkUser = QuanTri::where('username_qt', $username_qt)->orWhere('mail_qt', $mail_qt)->get();

        if(count($checkUser)){
            $request->session()->flash('msgDanger', 'Trùng username hoặc email');
            return redirect()->action("Admin\QuanTriController@index");
        }


    	$arAdd = array(
    		'username_qt' => $username_qt, 
    		'fullname_qt' => $fullname_qt, 
    		'mail_qt' => $mail_qt, 
    		'password_qt' => sha1(md5($username_qt.$password_qt)),
    		'id_chuc' => $id_chuc, 
		);

		$objQt = new QuanTri();
		$objQt->insert($arAdd);

		$request->session()->flash('msg', 'Đã thêm thành công');
    	return redirect()->action("Admin\QuanTriController@index");
    }

    public function del($id, Request $request){
        if($id == 1){
            $request->session()->flash('msgDanger', 'Không thể xóa');
            return redirect()->action("Admin\QuanTriController@index");
        }
        BaiViet::where('id_qt', $id)->delete();
    	QuanTri::find($id)->delete();
    	
    	$request->session()->flash('msg', 'Đã xóa thành công');
    	return redirect()->action("Admin\QuanTriController@index");
    }

    public function postEdit(Request $request){


        $arRequests = $request->all();
        $id_qt = $arRequests['id_qt'];
        $username_qt = $arRequests['username_qt'];
        $fullname_qt = $arRequests['fullname_qt'];
        $mail_qt = $arRequests['mail_qt'];
        $id_chuc = $arRequests['id_chuc'];
        $password_qt = $arRequests['password_qt'];

        $ar_qtlg = $request->session()->get('arLogin');
        $id_qtlog =  $ar_qtlg[0]['id'];
        if($id_qtlog != $id_qt && $id_qt == 1){
            $request->session()->flash('msgDanger', 'Không thể sửa admin này');
            return redirect()->action("Admin\QuanTriController@index");
        }

        $checkUser = QuanTri::where('username_qt', $username_qt)->where('id', '!=' ,$id_qt)->orWhere('mail_qt', $mail_qt)->where('id', '!=' ,$id_qt)->get();

        if(count($checkUser)){
            $request->session()->flash('msgDanger', 'Trùng username hoặc email');
            return redirect()->action("Admin\QuanTriController@index");
        }


        $objQt = new QuanTri();
        $getByQt = $objQt->find($id_qt);
        $getByQt->username_qt = $username_qt;
        $getByQt->fullname_qt = $fullname_qt;
        $getByQt->mail_qt = $mail_qt;
        $getByQt->id_chuc = $id_chuc;

        if($password_qt != ""){
            $getByQt->password_qt = sha1(md5($username_qt.$password_qt));
        }

        $getByQt->save();

        $request->session()->flash('msg', 'Đã sửa thành công');
        return redirect()->action("Admin\QuanTriController@index");
    }

    public function getLogin(){
        return view('admin.quantri.login');
    }

     public function postLogin(Request $request){

        $arRequests = $request->all();

        $username = $arRequests['username'];
        $password = $arRequests['password'];
        
        $password = sha1(md5($username.$password));

        $arLogin = QuanTri::where('username_qt', $username)->where('password_qt', $password)->where('id_chuc', '>' , 0)->limit(1)->get();

        if (count($arLogin)) {
            $request->session()->put('arLogin', $arLogin);

            //Kiểm tra admin
            $arAdmin = QuanTri::where('username_qt', $username)->where('password_qt', $password)->where('id_chuc', '=' , 3)->limit(1)->get();
            if (count($arAdmin)) {
                $request->session()->put('arAdmin', $arAdmin);
            }

            //Kiểm tra Smod
            $arSmod = QuanTri::where('username_qt', $username)->where('password_qt', $password)->where('id_chuc', '>=' , 2)->limit(1)->get();
            if (count($arSmod) > 0) {
                $request->session()->put('arSmod', $arSmod);
            }

            
            return redirect()->route('admin.index.index');
        }else{
            $request->session()->flash('msg', 'Sai username hoặc password');
            return redirect()->route('admin.quantri.login');
        }


    }
    public function logout(Request $request){
        $request->session()->forget('arLogin');
        return redirect()->route('admin.quantri.login');
    }
}
