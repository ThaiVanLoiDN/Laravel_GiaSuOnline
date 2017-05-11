<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\QuangCao;
use File;

class QuangCaoController extends Controller
{
    public function index(){
    	$arQuangCaos = QuangCao::orderBy('id_qc', 'desc')->paginate(10);
    	return view('admin.QuangCao.index', ['arQuangCaos' => $arQuangCaos]);
    }

    public function del($id, Request $request){
    	/*Xóa ảnh*/
    	$hinhAnh = QuangCao::select('img_qc')->where('id_qc', $id)->get();
    	$img = $hinhAnh[0]['img_qc'];

    	if($img != ""){
    		File::delete("storage/files/$img");
    	}

    	QuangCao::find($id)->delete();
    	
    	$request->session()->flash('msg', 'Đã xóa thành công');
    	return redirect()->action("Admin\QuangCaoController@index");
    }

    public function getAdd(){
    	return view('admin.QuangCao.add');
    }

    public function postAdd(Request $request){
    	$arRequests = $request->all();

    	$tenqc = $arRequests['tenqc'];
    	$link_qc = $arRequests['link_qc'];
    	$is_activeqc = $arRequests['is_activeqc'];

    	$img_qc = "";

    	if($request->file('img_qc') != NULL){
            $img_qc = $request->file('img_qc')->getClientOriginalName();

            $ar_name = explode('.', $img_qc);
            $img_qc = end($ar_name);
            $img_qc = 'quangcao-'.time().'.'.$img_qc;

            $request->file('img_qc')->move('storage\files', $img_qc);
        }

    	$arAdd = array(
    		'tenqc' => $tenqc, 
    		'link_qc' => $link_qc, 
    		'is_activeqc' => $is_activeqc, 
    		'img_qc' => $img_qc, 
		);

		$objQt = new QuangCao();
		$objQt->insert($arAdd);

		$request->session()->flash('msg', 'Đã thêm thành công');
    	return redirect()->action("Admin\QuangCaoController@index");
    }

    public function getEdit($id, Request $request){
        $arQuangCaos = QuangCao::where('id_qc', $id)->get();

        return view('admin.QuangCao.edit', ['arQuangCaos' => $arQuangCaos]);
    }

     public function postEdit($id, Request $request){
        $arRequests = $request->all();

        $tenqc = $arRequests['tenqc'];
        $link_qc = $arRequests['link_qc'];
        $is_activeqc = $arRequests['is_activeqc'];

        $objQt = new QuangCao();
        $getByGt = $objQt->find($id);

        $getByGt->tenqc = $tenqc;
        $getByGt->link_qc = $link_qc;
        $getByGt->is_activeqc = $is_activeqc;

        if($request->file('img_qc') != NULL){
            $img_qc = $request->file('img_qc')->getClientOriginalName();

            $ar_name = explode('.', $img_qc);
            $img_qc = end($ar_name);
            $img_qc = 'quangcao-'.time().'.'.$img_qc;

            $request->file('img_qc')->move('storage\files', $img_qc);

            $getByGt->img_qc = $img_qc;
        }

        
        $getByGt->save();

        $request->session()->flash('msg', 'Đã cập nhật thành công');
        return redirect()->action("Admin\QuangCaoController@index");
    }
    public function getAjax(Request $request)
    {
        $urlAdmin = getenv('ADMIN_TEMPLATE_URL');
        $arRequests = $request->all();

        $id_qc = $arRequests['aid'];
        $gt = $arRequests['agt'];

        $objQt = new QuangCao();
        $getByGt = $objQt->find($id_qc);
        $getByGt->is_activeqc = $gt;

        $getByGt->save();

        if($gt == 0){
        ?>
            <a href="javascript:void(0)" class = "noactive" title="Kích hoạt">
                <img src="<?php echo $urlAdmin;?>/images/minus-circle.gif" alt="">
            </a>
        <?php
        }else{
        ?>
            <a href="javascript:void(0)"  title="Ngừng kích hoạt">
                <img src="<?php echo $urlAdmin;?>/images/tick-circle.gif" alt="" />
            </a>
        <?php
        }
    }
}
