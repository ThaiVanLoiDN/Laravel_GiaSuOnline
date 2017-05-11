<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cat;
use App\BaiViet;
use App\CommentBV;

class NewsController extends Controller
{
    public function index(){
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

        return view('news.index', ['arCats' => $arCats, 'arNewsAllCs' => $arNewsAllCs]);
    }
    public function cat($slug, $id){
    	$arCats = Cat::where('id_cat', $id)->get();
    	if(!isset($arCats[0])){
		    return redirect()->action("NewsController@index");
		}

    	$arNewsCats = BaiViet::where('id_cat', $id)->where('is_activepost', '=', '1')->orderBy('id_post', 'desc')
    	->select('id_post','tenpost','img_post', 'mota_post')
    	->paginate(6);
    	
        return view('news.cat', ['arCats' => $arCats, 'arNewsCats' => $arNewsCats]);
    }
    public function detail($slug, $id){
    	$arCats = Cat::get();
    	$arDetails = BaiViet::where('id_post', $id)->where('is_activepost', '=', 1)
    	->get();

        if(!count($arDetails)){
            return redirect()->action("IndexController@index");
        }

        /*Hiển thị view*/

        $luotdoc = $arDetails['0']['luotdoc'];

        /*Tăng view*/
        $objQt = new BaiViet();
        $getByGt = $objQt->find($id);

        $getByGt->luotdoc = $luotdoc + 1;
        $getByGt->save();

        /*Hiển thị comment*/
        $arComments = CommentBV::where('id_bv', '=', $id)->orderBy('id_bv', 'desc')->paginate(5);

    	$arNewsHot = BaiViet::where('is_activepost', '=', 1)->orderBy('luotdoc', 'desc')->take(5)->get();
    	$arNewsMoi = BaiViet::where('is_activepost', '=', 1)->orderBy('id_post', 'desc')->take(5)->get();

        /*SEO*/
        $titleSeo = $arDetails['0']['tenpost'];
        $motaSeo = $arDetails['0']['mota_post'];
    	return view('news.detail', ['arCats' => $arCats,'arNewsMoi' => $arNewsMoi, 'arNewsHot' => $arNewsHot, 'arDetails' => $arDetails, 'arComments' => $arComments, 'titleSeo' => $titleSeo, 'motaSeo' => $motaSeo]);
    }

    public function getComment(Request $request){
        $arRequests = $request->all();

        $hoten_cmt = e($arRequests['ahoten_cmt']);
        $email_cmt = e($arRequests['aemail_cmt']);
        $noidung_cmt = e($arRequests['anoidung_cmt']);
        $id_bv = $arRequests['aid_bv'];

        $arAdd = array(
            'hoten_cmt' => $hoten_cmt, 
            'email_cmt' => $email_cmt, 
            'noidung_cmt' => $noidung_cmt, 
            'id_bv' => $id_bv, 
            'time_cmt' => time(), 
        );

        $objQt = new CommentBV();
        $objQt->insert($arAdd);

        /*Hiển thị dữ liệu*/

        $arComments = CommentBV::where('id_bv', '=', $id_bv)->orderBy('id_bv', 'desc')->paginate(5);

        foreach ($arComments as $key => $arComment) {
            $hoten_cmt = $arComment['hoten_cmt'];
            $time_cmt = $arComment['time_cmt'];
            $noidung_cmt = $arComment['noidung_cmt'];

            $gio_cmt = date('h:i:s', $arComment['time_cmt']);
            $ngay_cmt = date('d-m-Y', $arComment['time_cmt']);

            ?>

            <div>
                <h5><?php echo $hoten_cmt ?> <span> lúc <?php echo $gio_cmt ?> ngày <?php echo $ngay_cmt ?></span></h5> 
                <p class="text-grey text-justify"><?php echo $noidung_cmt ?></p>
            </div>

            <?php
        }
    }
}
