<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GiaTri;

class GioiThieuController extends Controller
{
    public function getGt(){

    	$arGioiThieus = GiaTri::where('id_gt', 1)->get();

    	return view('admin.gioithieu.index', ['arGioiThieus' => $arGioiThieus]);
    }

    public function postGt(Request $request){

    	$arRequests = $request->all();

    	$gt = $arRequests['gt'];

        $objQt = new GiaTri();
        $getByGt = $objQt->find(1);
        $getByGt->gt = $gt;

        $getByGt->save();

		$request->session()->flash('msg', 'Đã cập nhật thành công');
    	return redirect()->action("Admin\GioiThieuController@getGt");
    }
}
