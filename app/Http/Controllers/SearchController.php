<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\GiaSu;
use App\QuanHuyen;
use App\MonHoc; 

class SearchController extends Controller
{
    public function postSearch(Request $request){
    	$arRequests = $request->all();

    	if(!count($arRequests)){
    		return redirect()->action("IndexController@index");
    	}

        $id_quan = $arRequests['id_quan'];
        $id_lop = $arRequests['id_lop'];
        $id_mon = $arRequests['id_mon'];

        $arInfoSearch = array(
        	'id_quan' => $id_quan, 
        	'id_lop' => $id_lop, 
        	'id_mon' => $id_mon, 
    	);

        $arSelects = DB::table('giasu as g')->join('dangkymon as d', 'g.id_gs', '=', 'd.id_gs')
        ->where('id_lop', '=', $id_lop)
        ->where('id_quan', '=', $id_quan)
        ->where('id_mon', '=', $id_mon)
        ->orderBy('diem', 'desc')
        ->select('username_gs', 'fullname_gs', 'img_gs', 'diem')->get();

        $arQuanHuyens = QuanHuyen::get();
    	$arMonHocs = MonHoc::get();
    	$arLopHocs = DB::table('lophoc')->get();
        return view('search.ketquagiasu', ['arQuanHuyens' => $arQuanHuyens, 'arMonHocs' => $arMonHocs, 'arLopHocs' => $arLopHocs, 'arSelects' => $arSelects, 'arInfoSearch' => $arInfoSearch]);
    }
}
