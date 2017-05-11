<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\PhuHuynh;

class PhuHuynhController extends Controller
{
    public function index(){
    	$arPhuHuynhs = PhuHuynh::orderBy('id_ph', 'desc')->paginate(15);
    	return view('admin.phuhuynh.index', ['arPhuHuynhs' => $arPhuHuynhs]);
    }
    public function getEdit($id_ph, Request $request){
    	$arPhuHuynhs = PhuHuynh::where('id_ph', $id_ph)->get();
    	$arQuanHuyens = DB::table('quanhuyen')->get();

    	return view('admin.phuhuynh.edit', ['arPhuHuynhs' => $arPhuHuynhs, 'arQuanHuyens' => $arQuanHuyens]);
    }
    public function postEdit($id_ph, Request $request){
    	$arRequests = $request->all();

        $username_ph = $arRequests['username_ph'];
        $fullname_ph = $arRequests['fullname_ph'];
        $password_ph = $arRequests['password_ph'];
        $password_new = sha1(md5($username_ph.$password_ph));

        $mail_ph = $arRequests['mail_ph'];
        $id_quan = $arRequests['id_quan'];
        $phone_ph = $arRequests['phone_ph'];
        $diachi_ph = $arRequests['diachi_ph'];

        $xu_ph = $arRequests['xu_ph'];        

        $arCheckTrung = PhuHuynh::where('username_ph','=', $username_ph)->where('id_ph','!=', $id_ph)
        ->orWhere('mail_ph','=', $mail_ph)->where('id_ph','!=', $id_ph)->get();

        if(isset($arCheckTrung[0])){
            $request->session()->flash('msgdanger', 'Username hoặc Email đã bị trùng, bạn vui lòng nhập Username hoặc Email khác');
            return redirect()->action("Admin\PhuHuynhController@index");
        }


        $objQt = new PhuHuynh();
        $getByGt = $objQt->find($id_ph);

        $getByGt->username_ph = $username_ph;
        $getByGt->fullname_ph = $fullname_ph;
        if($password_ph != ""){
            $getByGt->password_ph = $password_new;    
        }
        
        
        $getByGt->mail_ph = $mail_ph;
        $getByGt->id_quan = $id_quan;
        $getByGt->phone_ph = $phone_ph;
        $getByGt->diachi_ph = $diachi_ph;
        $getByGt->xu_ph = $xu_ph;
        
        $getByGt->save();

        $request->session()->flash('msg', 'Đã cập nhật thành công');
        return redirect()->action("Admin\PhuHuynhController@index");
    }
    public function getAjax(Request $request)
    {
        $urlAdmin = getenv('ADMIN_TEMPLATE_URL');
        $arRequests = $request->all();

        $id_ph = $arRequests['aid_ph'];
        $gt = $arRequests['agt'];

        $objQt = new PhuHuynh();
        $getByGt = $objQt->find($id_ph);
        $getByGt->is_active = $gt;

        $getByGt->save();

        if($gt == 0){
        ?>
            <a href="javascript:void(0)" title="Kích hoạt" onclick="kichhoat(<?php echo $id_ph?>, 1)">
				<img src="<?php echo $urlAdmin;?>/images/minus-circle.gif" alt="">
        <?php
        }else{
        ?>
            <a href="javascript:void(0)"  title="Ngừng kích hoạt" onclick="kichhoat(<?php echo $id_ph?>, 0)">
				<img src="<?php echo $urlAdmin;?>/images/tick-circle.gif" alt="" />
			</a>
        <?php
        }
    }
}
