<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\CapHoc;
use App\LopHoc;
use App\MonHoc;

class CapLopController extends Controller
{
    public function index(){
        $arCaps = CapHoc::orderBy('id_cap', 'desc')->get();

    	$arMonHocs = MonHoc::orderBy('id_mon', 'desc')->get();

    	$arLops = DB::table('caphoc as c')->join('lophoc as l', 'c.id_cap', '=', 'l.id_cap')
    	->orderBy('id_lop', 'desc')
    	->select('c.tencap', 'c.id_cap','l.tenlop','l.id_lop')->paginate(10);

        /*Các tin tưc từng chuyên mục*/

        foreach ($arCaps as $key => $ccc) {
            $cid_cap = $ccc['id_cap'];
            $cname = $ccc['tencap'];

            $arLopCaps[$cid_cap]['soluong'] = DB::table('lophoc')->where('id_cap', $cid_cap)->count();
            $arLopCaps[$cid_cap]['tencap'] = $cname;
        }


    	return view('admin.caplop.index', ['arLops' => $arLops, 'arMonHocs' => $arMonHocs,'arCaps' => $arCaps, 'arLopCaps' => $arLopCaps]);
    }	

    public function del($id, Request $request){
        DB::table('dangkymon')->where('id_lop', $id)->delete();
    	LopHoc::find($id)->delete();
    	
    	$request->session()->flash('msg', 'Đã xóa thành công');
    	return redirect()->action("Admin\CapLopController@index");
    }
    public function delCap($idCap, Request $request){
        $arLopHocs =  DB::table('lophoc')->where('id_cap', $idCap)->get();

        foreach ($arLopHocs as $arLopHoc) {
           $id_lop = $arLopHoc['id_lop'];
           DB::table('dangkymon')->where('id_lop', $id_lop)->delete();
        }
        DB::table('lophoc')->where('id_cap', $idCap)->delete();


        CapHoc::find($idCap)->delete();
        
        $request->session()->flash('msgCap', 'Đã xóa thành công');
        return redirect()->action("Admin\CapLopController@index");
    }
    public function delMon($id, Request $request){
        DB::table('dangkymon')->where('id_mon', $id)->delete();
        MonHoc::find($id)->delete();
        
        $request->session()->flash('msgMon', 'Đã xóa thành công');
        return redirect()->action("Admin\CapLopController@index");
    }

    public function postAddCap(Request $request){
        $arRequests = $request->all();

        $tencap = $arRequests['tencap'];
        
        $arAdd = array(
            'tencap' => $tencap, 
           
        );

        $objQt = new CapHoc();
        $objQt->insert($arAdd);

        $request->session()->flash('msgCap', 'Đã thêm thành công');
        return redirect()->action("Admin\CapLopController@index");
    }
    public function postAdd(Request $request){
        $arRequests = $request->all();

        $tenlop = $arRequests['tenlop'];
        $id_cap = $arRequests['id_cap'];
        
        $arAdd = array(
            'tenlop' => $tenlop, 
            'id_cap' => $id_cap, 
           
        );

        $objQt = new LopHoc();
        $objQt->insert($arAdd);

        $request->session()->flash('msg', 'Đã thêm thành công');
        return redirect()->action("Admin\CapLopController@index");
    }

    public function postAddMon(Request $request){
        $arRequests = $request->all();

        $tenmon = $arRequests['tenmon'];
        
        $arAdd = array(
            'tenmon' => $tenmon, 
           
        );

        $objQt = new MonHoc();
        $objQt->insert($arAdd);

        $request->session()->flash('msgMon', 'Đã thêm thành công');
        return redirect()->action("Admin\CapLopController@index");
    }

    public function editCap(Request $request){
        $arRequests = $request->all();
        $tencap = $arRequests['tencap'];
        $id_cap = $arRequests['id_cap'];

        $objQt = new CapHoc();
        $getByCap = $objQt->find($id_cap);
        $getByCap->tencap = $tencap;

        $getByCap->save();

        $request->session()->flash('msgCap', 'Đã sửa thành công');
        return redirect()->action("Admin\CapLopController@index");
    }

    public function editMon(Request $request){
        $arRequests = $request->all();
        $tenmon = $arRequests['tenmon'];
        $id_mon = $arRequests['id_mon'];

        $objQt = new MonHoc();
        $getByMon = $objQt->find($id_mon);
        $getByMon->tenmon = $tenmon;

        $getByMon->save();

        $request->session()->flash('msgMon', 'Đã sửa thành công');
        return redirect()->action("Admin\CapLopController@index");
    }

    public function editLop(Request $request){
        $arRequests = $request->all();
        $tenlop = $arRequests['tenlop'];
        $id_lop = $arRequests['id_lop'];
        $id_cap = $arRequests['id_cap'];

        $objQt = new LopHoc();
        $getByMon = $objQt->find($id_lop);
        $getByMon->tenlop = $tenlop;
        $getByMon->id_cap = $id_cap;

        $getByMon->save();

        $request->session()->flash('msg', 'Đã sửa thành công');
        return redirect()->action("Admin\CapLopController@index");
    }
}
