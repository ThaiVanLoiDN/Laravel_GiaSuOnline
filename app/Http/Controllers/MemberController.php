<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\GiaSu;
use App\PhuHuynh;
use App\QuanHuyen;
use App\DangKyMon;
use Mail;
use File;

class MemberController extends Controller
{
    public function profile($username_gs, Request $request){
    	//Phu huynh xem thong tin cua gia su

        $arLoginPhuHuynhs = $request->session()->get('arLoginPhuHuynh');
        $id_ph =  $arLoginPhuHuynhs[0]['id_ph'];

        $arInfoGiaSu = GiaSu::where('username_gs','=', $username_gs)->get();

        if(!isset($arInfoGiaSu[0])){
            return redirect()->action("IndexController@index");
        }

        $id_gs = $arInfoGiaSu[0]['id_gs'];
        
        $id_quan =  $arInfoGiaSu[0]['id_quan'];

        $arDangKyMon = DB::table('giasu as g')->join('dangkymon as d', 'g.id_gs', '=', 'd.id_gs')
        ->join('lophoc as l', 'l.id_lop', '=', 'd.id_lop')->join('monhoc as m', 'm.id_mon', '=', 'd.id_mon')
            ->where('d.id_gs','=', $id_gs)
            ->select('l.tenlop as ltenlop','m.tenmon as mtenmon')
            ->get();

        $arQuans = DB::table('quanhuyen as q')->join('giasu as g', 'g.id_quan', '=', 'q.id_quan')
        ->where('q.id_quan', '=', $id_quan)
        ->select('q.tenquan as qtenquan')->get();

        $arComments = DB::table('comment_gs as c')->join('phuhuynh as p', 'p.id_ph', '=', 'c.id_ph')
            ->where('c.id_gs','=', $id_gs)
            ->orderBy('id_cmt', 'desc')
            ->select('p.fullname_ph as pfullname_ph','c.noidung_cmt', 'c.time_cmt')
            ->paginate(5);

        $likes = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('loailike', '=', '1')->count();
        $dislikes = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('loailike', '=', '-1')->count();

        $liked = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('id_ph', '=', $id_ph)->where('loailike', '=', '1')->count();
        $disliked = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('id_ph', '=', $id_ph)->where('loailike', '=', '-1')->count();

        $isConfirm = DB::table('confirm_gs')->where('id_gs', '=', $id_gs)->where('id_ph', '=', $id_ph)->where('time_cf', '>', 0)->count();
        $isWait = DB::table('confirm_gs')->where('id_gs', '=', $id_gs)->where('id_ph', '=', $id_ph)->where('time_cf', '=', 0)->count();

        return view('member.profile', ['arInfoGiaSus' => $arInfoGiaSu, 'arDangKyMons' => $arDangKyMon, 'arQuans' => $arQuans, 'arComments' => $arComments, 'likes' => $likes, 'dislikes' => $dislikes, 'isConfirm' => $isConfirm, 'isWait' => $isWait, 'liked' => $liked, 'disliked' => $disliked]);
    }

    public function trangcanhan($username_gs, Request $request){
        //Admin thong tin cua gia su

        $arInfoGiaSu = GiaSu::where('username_gs','=', $username_gs)->get();

        if(!isset($arInfoGiaSu[0])){
            return redirect()->action("IndexController@index");
        }

        $id_gs = $arInfoGiaSu[0]['id_gs'];
        
        $id_quan =  $arInfoGiaSu[0]['id_quan'];

        $arDangKyMon = DB::table('giasu as g')->join('dangkymon as d', 'g.id_gs', '=', 'd.id_gs')
        ->join('lophoc as l', 'l.id_lop', '=', 'd.id_lop')->join('monhoc as m', 'm.id_mon', '=', 'd.id_mon')
            ->where('d.id_gs','=', $id_gs)
            ->select('l.tenlop as ltenlop','m.tenmon as mtenmon')
            ->get();

        $arQuans = DB::table('quanhuyen as q')->join('giasu as g', 'g.id_quan', '=', 'q.id_quan')
        ->where('q.id_quan', '=', $id_quan)
        ->select('q.tenquan as qtenquan')->get();

        $arComments = DB::table('comment_gs as c')->join('phuhuynh as p', 'p.id_ph', '=', 'c.id_ph')
            ->where('c.id_gs','=', $id_gs)
            ->orderBy('id_cmt', 'desc')
            ->select('p.fullname_ph as pfullname_ph','c.noidung_cmt', 'c.time_cmt')
            ->paginate(5);

        $likes = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('loailike', '=', '1')->count();
        $dislikes = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('loailike', '=', '-1')->count();

        
        return view('member.trangcanhan', ['arInfoGiaSus' => $arInfoGiaSu, 'arDangKyMons' => $arDangKyMon, 'arQuans' => $arQuans, 'arComments' => $arComments, 'likes' => $likes, 'dislikes' => $dislikes]);
    }
    public function myprofile(Request $request){
    	//Gia su xem thong tin cua chinh minh

        $arLoginGiaSus = $request->session()->get('arLoginGiaSu');
        $id_gs =  $arLoginGiaSus[0]['id_gs'];

        $arInfoGiaSu = GiaSu::where('id_gs','=', $id_gs)->get();
        
        $id_quan =  $arInfoGiaSu[0]['id_quan'];

        $arDangKyMon = DB::table('giasu as g')->join('dangkymon as d', 'g.id_gs', '=', 'd.id_gs')
        ->join('lophoc as l', 'l.id_lop', '=', 'd.id_lop')->join('monhoc as m', 'm.id_mon', '=', 'd.id_mon')
            ->where('d.id_gs','=', $id_gs)
            ->select('l.tenlop as ltenlop','m.tenmon as mtenmon')
            ->get();

        $arQuans = DB::table('quanhuyen as q')->join('giasu as g', 'g.id_quan', '=', 'q.id_quan')
        ->where('q.id_quan', '=', $id_quan)
        ->select('q.tenquan as qtenquan')->get();

        $arComments = DB::table('comment_gs as c')->join('phuhuynh as p', 'p.id_ph', '=', 'c.id_ph')
            ->where('c.id_gs','=', $id_gs)
            ->orderBy('id_cmt', 'desc')
            ->select('p.fullname_ph as pfullname_ph','c.noidung_cmt', 'c.time_cmt')
            ->paginate(5)
            ;

        $likes = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('loailike', '=', '1')->count();
        $dislikes = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('loailike', '=', '-1')->count();

        return view('member.myprofile', ['arInfoGiaSus' => $arInfoGiaSu, 'arDangKyMons' => $arDangKyMon, 'arQuans' => $arQuans, 'arComments' => $arComments, 'likes' => $likes, 'dislikes' => $dislikes]);
    }

    public function getEditprofile(Request $request){
    	//Gia su sua thong tin cua chinh minh

        $arQuans = QuanHuyen::get();

        $arLoginGiaSus = $request->session()->get('arLoginGiaSu');
        $id_gs =  $arLoginGiaSus[0]['id_gs'];

        $arThongTinGiaSus = GiaSu::where('id_gs', $id_gs)->get();

        return view('member.editprofile', ['arQuans' => $arQuans, 'arThongTinGiaSus' => $arThongTinGiaSus]);
    }
    public function postEditprofile(Request $request){

        $arLoginGiaSus = $request->session()->get('arLoginGiaSu');
        $id_gs =  $arLoginGiaSus[0]['id_gs'];
        $username_gs =  $arLoginGiaSus[0]['username_gs'];


        $arRequests = $request->all();

        $fullname_gs = $arRequests['fullname_gs'];
        $password_gs = $arRequests['password_gs'];
        $password_new = sha1(md5($username_gs.$password_gs));

        $mail_gs = $arRequests['mail_gs'];
        $id_quan = $arRequests['id_quan'];
        $phone_gs = $arRequests['phone_gs'];
        $diachi_gs = $arRequests['diachi_gs'];
        $ngaysinh_gs = $arRequests['ngaysinh_gs'];
        $mota_gs = $arRequests['mota_gs'];        

        //Check Username và Email
        $arCheckTrung = GiaSu::where('username_gs','!=', $username_gs)->where('mail_gs','=', $mail_gs)->get();

        if(isset($arCheckTrung[0])){
            $request->session()->flash('msgdanger', 'Username hoặc Email đã bị trùng, bạn vui lòng nhập Username hoặc Email khác');
            return redirect()->action("MemberController@getEditprofile");
        }

        $objQt = new GiaSu();
        $getByGt = $objQt->find($id_gs);

        if($request->file('img_gs') != NULL){
            $img_gs = $request->file('img_gs')->getClientOriginalName();

            $ar_name = explode('.', $img_gs);
            $img_gs = end($ar_name);
            $img_gs = 'giasu-'.time().'.'.$img_gs;

            $request->file('img_gs')->move('storage\files', $img_gs);

            $getByGt->img_gs = $img_gs;
        }

        $getByGt->fullname_gs = $fullname_gs;
        if($password_gs != ""){
            $getByGt->password_gs = $password_new;    
        }
        
        $getByGt->mail_gs = $mail_gs;
        $getByGt->id_quan = $id_quan;
        $getByGt->phone_gs = $phone_gs;
        $getByGt->diachi_gs = $diachi_gs;
        $getByGt->ngaysinh_gs = $ngaysinh_gs;
        $getByGt->mota_gs = $mota_gs;
        
        $getByGt->save();

        $request->session()->flash('msg', 'Đã cập nhật thành công');
        return redirect()->action("MemberController@getEditprofile");
    }


    public function getEditinfo(Request $request){
    	//Phu huynh sua thong tin cua chinh minh

        $arQuans = QuanHuyen::get();

        $arLoginPhuHuynh = $request->session()->get('arLoginPhuHuynh');
        $id_ph =  $arLoginPhuHuynh[0]['id_ph'];

        $arThongTinPhuHuynhs = PhuHuynh::where('id_ph', $id_ph)->get();

        return view('member.editinfo', ['arQuans' => $arQuans, 'arThongTinPhuHuynhs' => $arThongTinPhuHuynhs]);
    }

    public function postEditinfo(Request $request){
        $arLoginPhuHuynhs = $request->session()->get('arLoginPhuHuynh');
        $id_ph =  $arLoginPhuHuynhs[0]['id_ph'];
        $username_ph =  $arLoginPhuHuynhs[0]['username_ph'];


        $arRequests = $request->all();


        $fullname_ph = $arRequests['fullname_ph'];
        $password_ph = $arRequests['password_ph'];
        $password_new = sha1(md5($username_ph.$password_ph));

        $mail_ph = $arRequests['mail_ph'];
        $id_quan = $arRequests['id_quan'];
        $phone_ph = $arRequests['phone_ph'];
        $diachi_ph = $arRequests['diachi_ph'];
    
        $objQt = new PhuHuynh();
        $getByGt = $objQt->find($id_ph);

        $getByGt->fullname_ph = $fullname_ph;
        if($password_ph != ""){
            $getByGt->password_ph = $password_new;    
        }
        
        $getByGt->mail_ph = $mail_ph;
        $getByGt->id_quan = $id_quan;
        $getByGt->phone_ph = $phone_ph;
        $getByGt->diachi_ph = $diachi_ph;

        
        $getByGt->save();

        $request->session()->flash('msg', 'Đã cập nhật thành công');
        return redirect()->action("MemberController@getEditinfo");
    }

    public function getDangKyMon(Request $request){
        $arLoginGiaSus = $request->session()->get('arLoginGiaSu');
        $id_gs =  $arLoginGiaSus[0]['id_gs'];

        $arMonHocs = DB::table('monhoc')->get();
        $arLopHocs = DB::table('lophoc')->get();

        $arDangKyMoned = DB::table('dangkymon')->where('id_gs','=', $id_gs)->get();

        return view('member.dangkymon', ['arMonHocs' => $arMonHocs, 'arLopHocs' => $arLopHocs, 'arDangKyMoned' => $arDangKyMoned]);
    }

    public function postDangKyMon(Request $request){

        $arLoginGiaSus = $request->session()->get('arLoginGiaSu');
        $id_gs =  $arLoginGiaSus[0]['id_gs'];

        //Xóa các môn đã đăng ký
        DB::table('dangkymon')->where('id_gs','=', $id_gs)->delete();

        //Thêm các môn sẽ đăng ký
        $arRequests = $request->all();

        $monhoc1 = $arRequests['monhoc1'];
        $lophoc1 = $arRequests['lophoc1'];

        if($monhoc1 != "" && $lophoc1 != ""){
            $arAdd1 = array(
                'id_mon' => $monhoc1, 
                'id_lop' => $lophoc1,             
                'id_gs' => $id_gs,             
            );

            $objQt = new DangKyMon();
            $objQt->insert($arAdd1);
        }    

        $monhoc2 = $arRequests['monhoc2'];
        $lophoc2 = $arRequests['lophoc2'];

        if($monhoc2 != "" && $lophoc2 != ""){
            $arAdd2 = array(
                'id_mon' => $monhoc2, 
                'id_lop' => $lophoc2,             
                'id_gs' => $id_gs,             
            );

            $objQt = new DangKyMon();
            $objQt->insert($arAdd2);
        }    
        
        $monhoc3 = $arRequests['monhoc3'];
        $lophoc3 = $arRequests['lophoc3'];

        if($monhoc3 != "" && $lophoc3 != ""){
            $arAdd3 = array(
                'id_mon' => $monhoc3, 
                'id_lop' => $lophoc3,             
                'id_gs' => $id_gs,             
            );

            $objQt = new DangKyMon();
            $objQt->insert($arAdd3);
        }    

        $request->session()->flash('msg', 'Bạn đã đăng ký thành công');
        return redirect()->action("MemberController@getDangKyMon");
    }

    public function getSignup(){
        $arQuans = QuanHuyen::get();

        return view('member.signup', ['arQuans' => $arQuans]);
    }

    public function postSignup(Request $request){
        $arRequests = $request->all();

        $username = $arRequests['username'];
        $fullname = $arRequests['fullname'];
        $password = $arRequests['password'];
        $email = $arRequests['email'];
        $phone = $arRequests['phone'];
        $address = $arRequests['address'];
        $id_quan = $arRequests['id_quan'];

        //Check Username và Email
        $arCheckTrung = GiaSu::where('username_gs','=', $username)->orWhere('mail_gs','=', $email)->get();

        if(isset($arCheckTrung[0])){
            $request->session()->flash('msgdanger', 'Username hoặc Email đã bị trùng, bạn vui lòng nhập Username hoặc Email khác');
            return redirect()->action("MemberController@getSignup");
        }


        /*Gửi mail*/

        $title = 'GiaSuOnline - Xác nhận tài khoản';

        $data = array(
            'email' => $email, 
            'username' => $username, 
            'password' => $password, 
            'title' => $title
        );

        Mail::send('emails.dangky', $data, function ($message) use ($email)
         {
            $message->from('hoangvan252@gmail.com', 'GiaSuOnline');
            $message->subject('GiaSuOnline - Xác nhận tài khoản');
            $message->to($email);
        });


        /*Chèn dữ liệu vào database*/

        $arAdd = array(
            'username_gs' => $username, 
            'fullname_gs' => $fullname, 
            'mail_gs' => $email, 
            'password_gs' => sha1(md5($username.$password)), 
            'phone_gs' => $phone, 
            'diachi_gs' => $address, 
            'id_quan' => $id_quan, 
            'time_register' => time(), 
            'is_active' => 0, 
            'xu_gs' => 0, 
            'diem' => 0, 
            
        );

        $objQt = new GiaSu();
        $objQt->insert($arAdd);

        $request->session()->flash('msg', 'Chúc mừng bạn đã đăng ký thành công');
        return redirect()->action("MemberController@getSignup");
    }
    public function postLogin(Request $request){
        $arRequests = $request->all();

        $username = $arRequests['username'];
        $password = $arRequests['password'];        

        $password = sha1(md5($username.$password));

        $arDangNhap2 = GiaSu::where('username_gs','=', $username)->where('is_active','=', 0)->where('password_gs','=', $password)->get();

        if(count($arDangNhap2) > 0){
            $request->session()->flash('msgdanger', 'Tài khoản này chưa được kích hoạt. Vui lòng liên hệ với admin để kích hoạt');
            return redirect()->action("MemberController@getSignup");
        }

        $arDangNhap = GiaSu::where('username_gs','=', $username)->where('is_active','=', 1)->where('password_gs','=', $password)->get();

        if(!count($arDangNhap)){
            $request->session()->flash('msgdanger', 'Sai tên đăng nhập/email hoặc mật khẩu. Vui lòng đăng nhập lại hoặc đăng ký dưới đây');
            return redirect()->action("MemberController@getSignup");
        }
        

        $request->session()->put('arLoginGiaSu', $arDangNhap);
        return redirect()->action("IndexController@index");
    }

    /*Phụ Huynh*/
    public function getDangKy(){
        $arQuans = QuanHuyen::get();

        return view('member.dangky', ['arQuans' => $arQuans]);
    }

    public function postDangKy(Request $request){
        /*Phụ huynh đăng ký*/
        $arRequests = $request->all();

        $username = $arRequests['username'];
        $fullname = $arRequests['fullname'];
        $password = $arRequests['password'];
        $email = $arRequests['email'];
        $phone = $arRequests['phone'];
        $address = $arRequests['address'];
        $id_quan = $arRequests['id_quan'];

        //Check Username và Email
        $arCheckTrung = PhuHuynh::where('username_ph','=', $username)->orWhere('mail_ph','=', $email)->get();

        if(isset($arCheckTrung[0])){
            $request->session()->flash('msgdanger', 'Username hoặc Email đã bị trùng, bạn vui lòng nhập Username hoặc Email khác');
            return redirect()->action("MemberController@getDangKy");
        }

         /*Gửi mail*/

        $title = 'GiaSuOnline - Xác nhận tài khoản';

        $data = array(
            'email' => $email, 
            'username' => $username, 
            'password' => $password, 
            'title' => $title
        );

        

        Mail::send('emails.dangkyphuhuynh', $data, function ($message) use ($email)
         {
            $message->from('hoangvan252@gmail.com', 'GiaSuOnline');
            $message->subject('GiaSuOnline - Xác nhận tài khoản');
            $message->to($email);
        });

        /*Chèn database*/

        $arAdd = array(
            'username_ph' => $username, 
            'fullname_ph' => $fullname, 
            'mail_ph' => $email, 
            'password_ph' => sha1(md5($username.$password)), 
            'phone_ph' => $phone, 
            'diachi_ph' => $address, 
            'id_quan' => $id_quan, 
            'is_active' => 1, 
            'xu_ph' => 0, 
        );

        $objQt = new PhuHuynh();
        $objQt->insert($arAdd);

        $request->session()->flash('msg', 'Chúc mừng bạn đã đăng ký thành công');
        return redirect()->action("MemberController@getDangKy");
    }

    public function postDangNhap(Request $request){
        $arRequests = $request->all();

        $username = $arRequests['username'];
        $password = $arRequests['password'];    

        $arDangNhap2 = PhuHuynh::where('username_ph','=', $username)->where('is_active','=', 0)->where('password_ph','=', sha1(md5($username.$password)))->get();

        if(count($arDangNhap2)){
            $request->session()->flash('msgdanger', 'Tài khoản chưa được kích hoạt. Vui lòng liên hệ với admin để kích hoạt');
            return redirect()->action("MemberController@getDangKy");
        }    

        $arDangNhap = PhuHuynh::where('username_ph','=', $username)->where('is_active','=', 1)->where('password_ph','=', sha1(md5($username.$password)))->get();

        if(!count($arDangNhap)){
            $request->session()->flash('msgdanger', 'Sai tên đăng nhập/email hoặc mật khẩu. Vui lòng đăng nhập lại hoặc đăng ký dưới đây');
            return redirect()->action("MemberController@getDangKy");
        }

        $request->session()->put('arLoginPhuHuynh', $arDangNhap);
        return redirect()->action("IndexController@index");
    }
    public function logout(Request $request){


        if($request->session()->has('arLoginPhuHuynh')){
            $request->session()->forget('arLoginPhuHuynh');
        }

        if($request->session()->has('arLoginGiaSu')){
            $request->session()->forget('arLoginGiaSu');
        }
    	return redirect()->action("IndexController@index");
    }
    
    public function notification(Request $request){
        $arLoginGiaSus = $request->session()->get('arLoginGiaSu');
        $id_gs =  $arLoginGiaSus[0]['id_gs'];

        $arKetBans = DB::table('confirm_gs as c')->join('phuhuynh as p', 'p.id_ph', '=', 'c.id_ph')
        ->where('time_cf', '=', 0)->where('id_gs', '=', $id_gs)->select('p.fullname_ph as pfullname_ph', 'p.id_ph as pid_ph')->get();

        $arDaKetBans = DB::table('confirm_gs as c')->join('phuhuynh as p', 'p.id_ph', '=', 'c.id_ph')
        ->where('time_cf', '>', 0)->where('id_gs', '=', $id_gs)->select('p.fullname_ph as pfullname_ph', 'p.id_ph as pid_ph')->get();

        $tien = GiaSu::where('id_gs', '=', $id_gs)->select('xu_gs')->get();

        $muctien = DB::table('giatri')->where('id_gt', '=', 3)->select('gt')->get();

        return view('member.notification', ['arKetBans' => $arKetBans, 'arDaKetBans' => $arDaKetBans, 'tien' => $tien, 'muctien' => $muctien]);
    }

    
    public function thongbao(Request $request){
        $arLoginPhuHuynh = $request->session()->get('arLoginPhuHuynh');
        $id_ph =  $arLoginPhuHuynh[0]['id_ph'];

        $arKetBans = DB::table('confirm_gs as c')->join('giasu as g', 'g.id_gs', '=', 'c.id_gs')
        ->where('time_cf', '=', 0)->where('id_ph', '=', $id_ph)->select('g.fullname_gs as gfullname_gs', 'g.id_gs as gid_gs', 'g.username_gs as gusername_gs')->get();

        $arDaKetBans = DB::table('confirm_gs as c')->join('giasu as g', 'g.id_gs', '=', 'c.id_gs')
        ->where('time_cf', '>', 0)->where('id_ph', '=', $id_ph)->select('g.img_gs as gimg_gs','g.fullname_gs as gfullname_gs', 'g.id_gs as gid_gs', 'g.username_gs as gusername_gs')->orderBy('g.id_gs', 'desc')->get();

        $tien = PhuHuynh::where('id_ph', '=', $id_ph)->select('xu_ph')->get();

        $muctien = DB::table('giatri')->where('id_gt', '=', 3)->select('gt')->get();

        //$arGiaSus = DB::table('giasu as g')->join('confirm_gs as c')

        return view('member.thongbao', ['arKetBans' => $arKetBans, 'arDaKetBans' => $arDaKetBans, 'tien' => $tien, 'muctien' => $muctien]);
    }
}
