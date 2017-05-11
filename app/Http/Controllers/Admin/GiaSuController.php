<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\GiaSu;
use Storage;
use File;

class GiaSuController extends Controller
{
    public function index(){
    	$arGiaSus = GiaSu::orderBy('id_gs', 'desc')->paginate(15);
    	return view('admin.giasu.index', ['arGiaSus' => $arGiaSus]);
    }
    public function getEdit($id_gs, Request $request){
    	$arGiaSus = GiaSu::where('id_gs', $id_gs)->get();
    	$arQuanHuyens = DB::table('quanhuyen')->get();

    	return view('admin.giasu.edit', ['arGiaSus' => $arGiaSus, 'arQuanHuyens' => $arQuanHuyens]);
    }
    public function postEdit($id_gs, Request $request){
    	$arRequests = $request->all();

        $username_gs = $arRequests['username_gs'];
        $fullname_gs = $arRequests['fullname_gs'];
        $password_gs = $arRequests['password_gs'];
        $password_new = sha1(md5($username_gs.$password_gs));

        $mail_gs = $arRequests['mail_gs'];
        $id_quan = $arRequests['id_quan'];
        $phone_gs = $arRequests['phone_gs'];
        $diachi_gs = $arRequests['diachi_gs'];
        $ngaysinh_gs = $arRequests['ngaysinh_gs'];
        $mota_gs = $arRequests['mota_gs'];        
        $xu_gs = $arRequests['xu_gs'];        

        $arCheckTrung = GiaSu::where('username_gs','=', $username_gs)->where('id_gs','!=', $id_gs)
        ->orWhere('mail_gs','=', $mail_gs)->where('id_gs','!=', $id_gs)->get();

        if(isset($arCheckTrung[0])){
            $request->session()->flash('msgdanger', 'Username hoặc Email đã bị trùng, bạn vui lòng nhập Username hoặc Email khác');
            return redirect()->action("Admin\GiaSuController@index");
        }

        $img_gs = "";

        if($request->file('img_gs') != NULL){
            $img_gs = $request->file('img_gs')->getClientOriginalName();

            $ar_name = explode('.', $img_gs);
            $img_gs = end($ar_name);
            $img_gs = 'giasu-'.time().'.'.$img_gs;

            $request->file('img_gs')->move('storage\files', $img_gs);

        }

        $objQt = new GiaSu();
        $getByGt = $objQt->find($id_gs);

        $getByGt->username_gs = $username_gs;
        $getByGt->fullname_gs = $fullname_gs;
        if($password_gs != ""){
            $getByGt->password_gs = $password_new;    
        }
        if($ngaysinh_gs != ""){
            $getByGt->ngaysinh_gs = $ngaysinh_gs;    
        }
        
        $getByGt->mail_gs = $mail_gs;
        $getByGt->id_quan = $id_quan;
        $getByGt->phone_gs = $phone_gs;
        $getByGt->diachi_gs = $diachi_gs;
        $getByGt->xu_gs = $xu_gs;
        $getByGt->img_gs = $img_gs;

        $getByGt->mota_gs = $mota_gs;
        
        $getByGt->save();

        $request->session()->flash('msg', 'Đã cập nhật thành công');
        return redirect()->action("Admin\GiaSuController@index");
    }
    public function getAjax(Request $request)
    {
        $urlAdmin = getenv('ADMIN_TEMPLATE_URL');
        $arRequests = $request->all();

        $id_gs = $arRequests['aid_gs'];
        $gt = $arRequests['agt'];

        $objQt = new GiaSu();
        $getByGt = $objQt->find($id_gs);
        $getByGt->is_active = $gt;

        $getByGt->save();

        if($gt == 0){
        ?>
            <a href="javascript:void(0)" title="Kích hoạt" onclick="kichhoat(<?php echo $id_gs?>, 1)">
				<img src="<?php echo $urlAdmin;?>/images/minus-circle.gif" alt="">
        <?php
        }else{
        ?>
            <a href="javascript:void(0)"  title="Ngừng kích hoạt" onclick="kichhoat(<?php echo $id_gs?>, 0)">
				<img src="<?php echo $urlAdmin;?>/images/tick-circle.gif" alt="" />
			</a>
        <?php
        }
    }
}
