<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Slide;
use App\GiaTri;
use App\GiaSu;
use App\PhuHuynh;
use App\BaiViet;
use App\QuangCao;
use App\Cat;
use App\LienHe;
use App\QuanHuyen;
use Mail;

class IndexController extends PublicController
{
    public function index(){

        $arSlides = Slide::get();
    	$arQuanHuyens = QuanHuyen::get();
        $arLopHocs = DB::table('lophoc')->get();
        $arMonHocs = DB::table('monhoc')->get();

        $muctien = DB::table('giatri')->where('id_gt', '=', 3)->select('gt')->get();
        $min = $muctien[0]['gt']; 

        $arGiaSuUuTus = GiaSu::where('is_active', '=', 1)->where('xu_gs', '>', $min)
        ->orderBy('diem', 'desc')->limit(4)
        ->select('username_gs', 'fullname_gs', 'img_gs', 'diem')->get();

    	$GioiThieus = GiaTri::where('id_gt', '=', 1)->get();

    	$Views = GiaTri::where('id_gt', '=', 2)->get();
    	$countGs = GiaSu::count();
    	$countPh = PhuHuynh::count();
    	$countPost = BaiViet::count();

    	$arData = array(
    		'GioiThieus' => $GioiThieus, 
    		'Views' => $Views, 
    		'countGs' => $countGs, 
    		'countPh' => $countPh, 
    		'countPost' => $countPost, 
    	);

         $arQuangCaos = QuangCao::orderBy('id_qc', 'desc')->where('is_activeqc', '=', 1)->limit(4)->get();

        $arCats = Cat::get();

        foreach ($arCats as $key => $ccc) {
            $cid_cat = $ccc['id_cat'];
            $cname = $ccc['tencat'];

            $arNewsAllCs[$cid_cat] = DB::table('baiviet as b')->join('category as c', 'b.id_cat', '=', 'c.id_cat')
            ->where('c.id_cat','=', $cid_cat)->where('b.is_activepost', '=', '1')
            
            ->orderBy('id_post', 'desc')
            ->select('b.id_post','b.tenpost','b.img_post', 'b.mota_post','c.tencat')
            ->take(3)->get();
        }

    	return view('index.index', ['arSlides' => $arSlides, 'arData' => $arData, 'arQuangCaos' => $arQuangCaos, 'arCats' => $arCats, 'arNewsAllCs' => $arNewsAllCs, 'arQuanHuyens' => $arQuanHuyens, 'arLopHocs' => $arLopHocs, 'arMonHocs' => $arMonHocs, 'arGiaSuUuTus' => $arGiaSuUuTus]);
    }

    public function postAddLienHe(Request $request){
        $arRequests = $request->all();

        $username = $arRequests['username'];
        $email = $arRequests['email'];
        $phone = $arRequests['phone'];
        $noidung = $arRequests['noidung'];
        
        $arAdd = array(
            'tenlh' => $username, 
            'mail_lh' => $email, 
            'phone_lh' => $phone, 
            'noidung_lh' => $noidung, 
            'time_lh' => time(), 
           
        );

        $objQt = new LienHe();
        $objQt->insert($arAdd);

        /*Gửi mail*/

        $title = 'GiaSuOnline - Liên hệ';

        $data = array(
            'email' => $email, 
            'username' => $username, 
            'phone' => $phone, 
            'noidung' => $noidung, 
            'title' => $title
        );

        Mail::send('emails.guilienhe', $data, function ($message) 
         {
            $message->from('hoangvan252@gmail.com', 'GiaSuOnline');
            $message->subject('GiaSuOnline - Xác nhận tài khoản');
            $message->to('thaivanloidn@gmail.com');
        });

        return redirect()->action("IndexController@index");
    }
}
