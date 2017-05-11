<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\LienHe;

class LienHeController extends Controller
{

    public function index(){
    	$arLienHes = LienHe::orderBy('id_lh', 'desc')->paginate(10);
    	return view('admin.lienhe.index', ['arLienHes' => $arLienHes]);
    }

    public function del($id, Request $request){
    	LienHe::find($id)->delete();
    	
    	$request->session()->flash('msg', 'Đã xóa thành công');
    	return redirect()->action("Admin\LienHeController@index");
    }

    public function postDelnhieu(Request $request){
        
        $arLienHes = array();
        $arLienHes = $request->iddel;

        LienHe::wherein('id_lh', $arLienHes)->delete();
        
        $request->session()->flash('msg', 'Đã xóa các bài viết thành công');
        return redirect()->action("Admin\LienHeController@index");
    }
}
