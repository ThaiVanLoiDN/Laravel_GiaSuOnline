<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\GiaTri;
use App\Cat;

class IndexController extends Controller
{
    public $request;
    public function __construct(){
          
    }
    public function index(){
    	$arGiaTris = GiaTri::where('id_gt','>', '2')->get();

    	$demGiaSu = DB::table('giasu')->count();
    	
    	$demPhuHuynh = DB::table('phuhuynh')->count();

    	$demHopDong = DB::table('confirm_gs')->count();

    	$arrayThongKes = array(
    		'Số Gia Sư' => $demGiaSu,
    		'Số Phụ Huynh' => $demPhuHuynh,
    		'Số Hợp Đồng' => $demHopDong,
		);

        $arDemBaiViet = DB::table('baiviet as b')
        ->join('quantri as q', 'b.id_qt', '=', 'q.id')
        ->groupBy('fullname_qt')
        ->select('fullname_qt',DB::raw('count(*) as baiviet'))
        ->get();        

        $arDemQuanTri = DB::table('quantri')
        ->groupBy('id_chuc')
        ->select('id_chuc',DB::raw('count(*) as dem'))
        ->get();  

        $arCats = Cat::orderBy('id_cat', 'desc')->get();
        foreach ($arCats as $key => $ccc) {
            $cid_cat = $ccc['id_cat'];
            $cname = $ccc['tencat'];

            $arNewsAllC[$cid_cat]['soluong'] = DB::table('baiviet')->where('id_cat', $cid_cat)->count();
            $arNewsAllC[$cid_cat]['tenchuyenmuc'] = $cname;
        }
       

    	return view('admin.index.index', ['arGiaTris' => $arGiaTris, 'arrayThongKes' => $arrayThongKes, 'arCats' => $arCats, 'arNewsAllC' => $arNewsAllC, 'arDemBaiViet' => $arDemBaiViet, 'arDemQuanTri' => $arDemQuanTri]);
    }
}
