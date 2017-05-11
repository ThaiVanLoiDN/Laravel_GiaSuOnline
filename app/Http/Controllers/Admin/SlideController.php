<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Slide;
use File;

class SlideController extends Controller
{
    public function index(){
    	$arSlides = Slide::orderBy('id_sl', 'desc')->paginate(10);
    	return view('admin.slide.index', ['arSlides' => $arSlides]);
    }

    public function del($id, Request $request){
    	/*Xóa ảnh*/
    	$hinhAnh = Slide::select('img_sl')->where('id_sl', $id)->get();
    	$img = $hinhAnh[0]['img_sl'];

    	if($img != ""){
    		File::delete("storage/files/$img");
    	}

    	Slide::find($id)->delete();
    	
    	$request->session()->flash('msg', 'Đã xóa thành công');
    	return redirect()->action("Admin\SlideController@index");
    }

    public function getAdd(){
    	return view('admin.slide.add');
    }

    public function postAdd(Request $request){
    	$arRequests = $request->all();

    	$tensl = $arRequests['tensl'];
    	$link_sl = $arRequests['link_sl'];
    	$mota_sl = $arRequests['mota_sl'];

    	$img_sl = "";

    	if($request->file('img_sl') != NULL){
            $img_sl = $request->file('img_sl')->getClientOriginalName();

            $ar_name = explode('.', $img_sl);
            $img_sl = end($ar_name);
            $img_sl = 'slide-'.time().'.'.$img_sl;

            $request->file('img_sl')->move('storage\files', $img_sl);
    	}

    	$arAdd = array(
    		'tensl' => $tensl, 
    		'link_sl' => $link_sl, 
    		'mota_sl' => $mota_sl, 
    		'img_sl' => $img_sl, 
		);

		$objQt = new Slide();
		$objQt->insert($arAdd);

		$request->session()->flash('msg', 'Đã thêm thành công');
    	return redirect()->action("Admin\SlideController@index");
    }

    public function getEdit($id, Request $request){
        $arSlides = Slide::where('id_sl', $id)->get();

        return view('admin.Slide.edit', ['arSlides' => $arSlides]);
    }

     public function postEdit($id, Request $request){
        $arRequests = $request->all();

        $tensl = $arRequests['tensl'];
        $link_sl = $arRequests['link_sl'];
        $mota_sl = $arRequests['mota_sl'];

        $objQt = new Slide();
        $getByGt = $objQt->find($id);

        $getByGt->tensl = $tensl;
        $getByGt->link_sl = $link_sl;
        $getByGt->mota_sl = $mota_sl;

        if($request->file('img_sl') != NULL){
            $img_sl = $request->file('img_sl')->getClientOriginalName();

            $ar_name = explode('.', $img_sl);
            $img_sl = end($ar_name);
            $img_sl = 'Slide-'.time().'.'.$img_sl;

            $request->file('img_sl')->move('storage\files', $img_sl);

            $getByGt->img_sl = $img_sl;
        }

        
        $getByGt->save();

        $request->session()->flash('msg', 'Đã cập nhật thành công');
        return redirect()->action("Admin\SlideController@index");
    }
}
