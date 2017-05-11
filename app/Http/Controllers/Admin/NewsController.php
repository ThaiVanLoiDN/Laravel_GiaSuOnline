<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\BaiViet;
use App\Cat;
use App\CommentBV;
use Storage;
use File;

class NewsController extends Controller
{
    public function index(){
    	$arCats = Cat::orderBy('id_cat', 'desc')->get();

    	$arBaiViets = DB::table('baiviet as b')->join('category as c', 'b.id_cat', '=', 'c.id_cat')
    	->orderBy('id_post', 'desc')
    	->select('b.id_post','b.tenpost','b.img_post', 'b.is_activepost', 'b.time_post','c.tencat')->paginate(10);

        /*Danh mục tin*/

        /*Các tin tưc từng chuyên mục*/

        foreach ($arCats as $key => $ccc) {
            $cid_cat = $ccc['id_cat'];
            $cname = $ccc['tencat'];

            $arNewsAllC[$cid_cat]['soluong'] = DB::table('baiviet')->where('id_cat', $cid_cat)->count();
            $arNewsAllC[$cid_cat]['tenchuyenmuc'] = $cname;
        }


    	return view('admin.news.index', ['arBaiViets' => $arBaiViets, 'arCats' => $arCats, 'arNewsAllC' => $arNewsAllC]);
    }

    public function getAdd(){
    	$arCats = DB::table('category')->select('*')->get();
    	return view('admin.news.add', ['arCats' => $arCats]);
    }

    public function postAdd(Request $request){
    	$arRequests = $request->all();

    	$tenpost = $arRequests['tenpost'];
    	$id_cat = $arRequests['id_cat'];
    	$mota_post = $arRequests['mota_post'];
        $chitiet_post = $arRequests['chitiet_post'];

        $ar_qt = $request->session()->get('arLogin');
        $id_qt =  $ar_qt[0]['id'];

        $img_post = "";

        if($request->file('img_post') != NULL){
            $img_post = $request->file('img_post')->getClientOriginalName();

            $ar_name = explode('.', $img_post);
            $img_post = end($ar_name);
            $img_post = 'baiviet-'.time().'.'.$img_post;

            $request->file('img_post')->move('storage\files', $img_post);
        }

    	$arAdd = array(
    		'tenpost' => $tenpost, 
    		'id_cat' => $id_cat, 
    		'mota_post' => $mota_post, 
    		'chitiet_post' => $chitiet_post, 
            'id_qt' => $id_qt, 
            'time_post' => time(), 
            'luotdoc' => 1, 
    		'is_activepost' => 1, 
            'img_post' => $img_post, 
		);

		$objQt = new BaiViet();
		$objQt->insert($arAdd);

		$request->session()->flash('msg', 'Đã thêm thành công');
    	return redirect()->action("Admin\NewsController@index");
    }

    public function getEdit($id, Request $request){
         $arBaiViets = BaiViet::where('id_post', $id)->get();
         $arCats = DB::table('category')->select('*')->get();

        return view('admin.news.edit', ['arBaiViets' => $arBaiViets, 'arCats' => $arCats]);
    }

    public function postEdit($id, Request $request){
        $arRequests = $request->all();

        $tenpost = $arRequests['tenpost'];
        $id_cat = $arRequests['id_cat'];
        $mota_post = $arRequests['mota_post'];
        $chitiet_post = $arRequests['chitiet_post'];

        $objQt = new BaiViet();
        $getByGt = $objQt->find($id);

        $getByGt->tenpost = $tenpost;
        $getByGt->id_cat = $id_cat;
        $getByGt->mota_post = $mota_post;
        $getByGt->chitiet_post = $chitiet_post;

        if($request->file('img_post') != NULL){
            $img_post = $request->file('img_post')->getClientOriginalName();

            $ar_name = explode('.', $img_post);
            $img_post = end($ar_name);
            $img_post = 'baiviet-'.time().'.'.$img_post;

            $request->file('img_post')->move('storage\files', $img_post);

            $getByGt->img_post = $img_post;
        }

        
        $getByGt->save();

        $request->session()->flash('msg', 'Đã cập nhật thành công');
        return redirect()->action("Admin\NewsController@index");
    }


    public function del($id, Request $request){

    	/*Xóa ảnh*/
    	$hinhAnh = BaiViet::select('img_post')->where('id_post', $id)->get();
    	$img = $hinhAnh[0]['img_post'];

    	if($img != ""){
    		File::delete("storage/files/$img");
    	}

    	/*Xóa bài viết*/
        CommentBV::where('id_bv', '=', $id)->delete();

    	BaiViet::find($id)->delete();
    	
    	$request->session()->flash('msg', 'Đã xóa thành công');
    	return redirect()->action("Admin\NewsController@index");
    }

    public function delCat($idcat, Request $request){

        BaiViet::where('id_cat', $idcat)->delete();

        Cat::find($idcat)->delete();
        
        $request->session()->flash('msgCat', 'Đã xóa thành công');
        return redirect()->action("Admin\NewsController@index");
    }

    public function postAddCat(Request $request){
        $arRequests = $request->all();

        $tencat = $arRequests['tencat'];
        
        $arAdd = array(
            'tencat' => $tencat, 
        );

        $objQt = new Cat();
        $objQt->insert($arAdd);

        $request->session()->flash('msgCat', 'Đã thêm thành công');
        return redirect()->action("Admin\NewsController@index");
    }

    public function editCat(Request $request){
        $arRequests = $request->all();
        $tencat = $arRequests['tencat'];
        $id_cat = $arRequests['id_cat'];

        $objQt = new Cat();
        $getByCat = $objQt->find($id_cat);
        $getByCat->tencat = $tencat;

        $getByCat->save();

        $request->session()->flash('msgCat', 'Đã sửa thành công');
        return redirect()->action("Admin\NewsController@index");
    }
    public function getAjax(Request $request)
    {
        $urlAdmin = getenv('ADMIN_TEMPLATE_URL');
        $arRequests = $request->all();

        $id_news = $arRequests['aid'];
        $gt = $arRequests['agt'];

        $objQt = new BaiViet();
        $getByGt = $objQt->find($id_news);
        $getByGt->is_activepost = $gt;

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
