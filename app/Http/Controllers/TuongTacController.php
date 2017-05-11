<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\GiaSu;
use App\PhuHuynh;
use App\Confirm_gs;
use App\Like_gs;
use App\Comment;
use App\Chat;
use App\Vote;
use Mail;

class TuongTacController extends Controller
{
    public function huyKetBan($id_gs, Request $request){

    	$arLoginPhuHuynhs = $request->session()->get('arLoginPhuHuynh');
        $id_ph =  $arLoginPhuHuynhs[0]['id_ph'];


		$arInfoGiaSu = GiaSu::where('id_gs','=', $id_gs)->get();

		$username_gs = $arInfoGiaSu[0]['username_gs'];
    	
		DB::table('confirm_gs')->where('id_gs', $id_gs)->where('id_ph', $id_ph)->delete();

		return redirect()->route('public.member.profile', $username_gs);
    }

    public function ketBan($id_gs, Request $request){

    	$arLoginPhuHuynhs = $request->session()->get('arLoginPhuHuynh');
        $id_ph =  $arLoginPhuHuynhs[0]['id_ph'];

        $tien = GiaSu::where('id_gs', '=', $id_gs)->select('xu_gs', 'mail_gs')->get();
        $tienph = PhuHuynh::where('id_ph', '=', $id_ph)->select('xu_ph', 'fullname_ph')->get();
        $muctien = DB::table('giatri')->where('id_gt', '=', 3)->select('gt')->get();

        $money_gs = $tien[0]['xu_gs'];
        $mail_gs = $tien[0]['mail_gs'];

        $money_ph = $tienph[0]['xu_ph'];
        $fullname_ph = $tienph[0]['fullname_ph'];

        $min = $muctien[0]['gt']; 

        if($money_gs < $min || $money_ph < $min){
            return redirect()->route('public.member.thongbao');
        }else{
            $objQt = new GiaSu();
            $getByCap = $objQt->find($id_gs);
            $getByCap->xu_gs = ($money_gs - $min);

            $getByCap->save();

            $objPh = new PhuHuynh();
            $getByPh = $objPh->find($id_ph);
            $getByPh->xu_ph = ($money_ph - $min);

            $getByPh->save();
        }
    	
		DB::table('confirm_gs')->where('id_gs', $id_gs)->where('id_ph', $id_ph)->delete();


        /*Gửi mail*/

        $title = 'GiaSuOnline - Chấp nhận đề nghị từ phụ huynh';

        $data = array(
            'mail_gs' => $mail_gs, 
            'fullname_ph' => $fullname_ph, 
            'title' => $title
        );

        Mail::send('emails.ketban', $data, function ($message) use ($mail_gs)
         {
            $message->from('hoangvan252@gmail.com', 'GiaSuOnline');
            $message->subject('GiaSuOnline - Xác nhận tài khoản');
            $message->to($mail_gs);
        });

        /*Chèn dữ liệu*/

        $arAdd = array(
    		'id_gs' => $id_gs, 
    		'id_ph' => $id_ph, 
            'time_cf' => 0, 
		);

		$objQt = new Confirm_gs();
		$objQt->insert($arAdd);


		$arInfoGiaSu = GiaSu::where('id_gs','=', $id_gs)->get();
		$username_gs = $arInfoGiaSu[0]['username_gs'];
		return redirect()->route('public.member.profile', $username_gs);
    }

    public function tuchoiKetBan($id_ph, Request $request){

    	$arLoginGiaSus = $request->session()->get('arLoginGiaSu');
        $id_gs =  $arLoginGiaSus[0]['id_gs'];
    	
		DB::table('confirm_gs')->where('id_gs', $id_gs)->where('id_ph', $id_ph)->delete();

		return redirect()->route('public.member.notification');
    }

    public function dongYKetBan($id_ph, Request $request){

    	$arLoginGiaSus = $request->session()->get('arLoginGiaSu');
        $id_gs =  $arLoginGiaSus[0]['id_gs'];

        $tien = GiaSu::where('id_gs', '=', $id_gs)->select('xu_gs', 'fullname_gs')->get();
        $tienph = PhuHuynh::where('id_ph', '=', $id_ph)->select('xu_ph', 'mail_ph')->get();
        $muctien = DB::table('giatri')->where('id_gt', '=', 3)->select('gt')->get();

        $fullname_gs = $tien[0]['fullname_gs'];
        $money_gs = $tien[0]['xu_gs'];

        $mail_ph = $tienph[0]['mail_ph'];
        $money_ph = $tienph[0]['xu_ph'];

        $min = $muctien[0]['gt']; 

        if($money_gs < $min || $money_ph < $min){
            return redirect()->route('public.member.notification');
        }else{
            $objQt = new GiaSu();
            $getByCap = $objQt->find($id_gs);
            $getByCap->xu_gs = ($money_gs - $min);

            $getByCap->save();

            $objPh = new PhuHuynh();
            $getByPh = $objPh->find($id_ph);
            $getByPh->xu_ph = ($money_ph - $min);

            $getByPh->save();
        }

        /*Gửi mail*/

        $title = 'GiaSuOnline - Chấp nhận đề nghị từ phụ huynh';

        $data = array(
            'mail_ph' => $mail_ph, 
            'fullname_gs' => $fullname_gs, 
            'title' => $title
        );

        Mail::send('emails.dongyketban', $data, function ($message) use ($mail_ph)
         {
            $message->from('hoangvan252@gmail.com', 'GiaSuOnline');
            $message->subject('GiaSuOnline - Xác nhận tài khoản');
            $message->to($mail_ph);
        });

        /*Chấp nhận*/
        
        $arCf = DB::table('confirm_gs')->where('id_gs', $id_gs)->where('id_ph', $id_ph)->select('id_cf')->get();


        $id_cf = $arCf[0]['id_cf'];

        $objQt = new Confirm_gs();
        $getByCf = $objQt->find($id_cf);
        $getByCf->time_cf = time();

        $getByCf->save();

		return redirect()->route('public.member.notification');
    }

    public function like(Request $request){

    	$arLoginPhuHuynhs = $request->session()->get('arLoginPhuHuynh');
        $id_ph =  $arLoginPhuHuynhs[0]['id_ph'];

        $arRequests = $request->all();
        $id_gs = $arRequests['aid_gs'];
    	
		DB::table('like_gs')->where('id_gs', $id_gs)->where('id_ph', $id_ph)->delete();

        $arAdd = array(
    		'id_gs' => $id_gs, 
    		'id_ph' => $id_ph, 
            'loailike' => 1, 
		);

		$objQt = new Like_gs();
		$objQt->insert($arAdd);

        //Đã like

        //Hiển thị
        $liked = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('id_ph', '=', $id_ph)->where('loailike', '=', '1')->count();
        $disliked = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('id_ph', '=', $id_ph)->where('loailike', '=', '-1')->count();

        $likes = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('loailike', '=', '1')->count();
        $dislikes = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('loailike', '=', '-1')->count();


        

		return view('member.like_ajax', ['liked' => $liked, 'likes' => $likes,'disliked' => $disliked, 'dislikes' => $dislikes, 'id_gs' => $id_gs]);
    }

    public function dislike(Request $request){

    	$arLoginPhuHuynhs = $request->session()->get('arLoginPhuHuynh');
        $id_ph =  $arLoginPhuHuynhs[0]['id_ph'];

        $arRequests = $request->all();
        $id_gs = $arRequests['aid_gs'];
    	
		DB::table('like_gs')->where('id_gs', $id_gs)->where('id_ph', $id_ph)->delete();

        $arAdd = array(
    		'id_gs' => $id_gs, 
    		'id_ph' => $id_ph, 
            'loailike' => -1, 
		);

		$objQt = new Like_gs();
		$objQt->insert($arAdd);


		//Hiển thị
        $liked = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('id_ph', '=', $id_ph)->where('loailike', '=', '1')->count();
        $disliked = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('id_ph', '=', $id_ph)->where('loailike', '=', '-1')->count();

        $likes = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('loailike', '=', '1')->count();
        $dislikes = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('loailike', '=', '-1')->count();


        

        return view('member.like_ajax', ['liked' => $liked, 'likes' => $likes,'disliked' => $disliked, 'dislikes' => $dislikes, 'id_gs' => $id_gs]);
    }

    public function unlike(Request $request){

    	$arLoginPhuHuynhs = $request->session()->get('arLoginPhuHuynh');
        $id_ph =  $arLoginPhuHuynhs[0]['id_ph'];

        $arRequests = $request->all();
        $id_gs = $arRequests['aid_gs'];
    	
		DB::table('like_gs')->where('id_gs', $id_gs)->where('id_ph', $id_ph)->delete();

		//Hiển thị
        $liked = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('id_ph', '=', $id_ph)->where('loailike', '=', '1')->count();
        $disliked = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('id_ph', '=', $id_ph)->where('loailike', '=', '-1')->count();

        $likes = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('loailike', '=', '1')->count();
        $dislikes = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('loailike', '=', '-1')->count();


        

        return view('member.like_ajax', ['liked' => $liked, 'likes' => $likes,'disliked' => $disliked, 'dislikes' => $dislikes, 'id_gs' => $id_gs]);
    }

    public function undislike(Request $request){

    	$arLoginPhuHuynhs = $request->session()->get('arLoginPhuHuynh');
        $id_ph =  $arLoginPhuHuynhs[0]['id_ph'];

        $arRequests = $request->all();
        $id_gs = $arRequests['aid_gs'];
    	
		DB::table('like_gs')->where('id_gs', $id_gs)->where('id_ph', $id_ph)->delete();

		//Hiển thị
        $liked = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('id_ph', '=', $id_ph)->where('loailike', '=', '1')->count();
        $disliked = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('id_ph', '=', $id_ph)->where('loailike', '=', '-1')->count();

        $likes = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('loailike', '=', '1')->count();
        $dislikes = DB::table('like_gs')->where('id_gs', '=', $id_gs)->where('loailike', '=', '-1')->count();


        

        return view('member.like_ajax', ['liked' => $liked, 'likes' => $likes,'disliked' => $disliked, 'dislikes' => $dislikes, 'id_gs' => $id_gs]);
    }

    public function vote(Request $request){
        $arLoginPhuHuynhs = $request->session()->get('arLoginPhuHuynh');
        $id_ph =  $arLoginPhuHuynhs[0]['id_ph'];

        $arRequests = $request->all();
        $id_gs = $arRequests['aid_gs'];
        $diem = $arRequests['adiem'];

        /*Xóa vote cũ*/
        DB::table('vote')->where('id_gs', '=', $id_gs)->where('id_ph', '=', $id_ph)->delete();


        /*Tính*/
        $tongdiem = DB::table('vote')->where('id_gs', '=', $id_gs)->sum('diem');
        $solan = DB::table('vote')->where('id_gs', '=', $id_gs)->count();

        $ketqua = intval(($tongdiem + $diem)/($solan + 1));

        /*Thêm vote*/

        $arAdd = array(
            'id_gs' => $id_gs, 
            'id_ph' => $id_ph, 
            'diem' => $diem, 
        );

        $objQt = new Vote();
        $objQt->insert($arAdd);

        /*Sửa info gia sư*/

        $objQt = new GiaSu();
        $getByGt = $objQt->find($id_gs);

        $getByGt->diem = $ketqua;
        $getByGt->save();

        /*Thay đổi ảnh vote*/
        $urlPublic = getenv('PUBLIC_TEMPLATE_URL');

        ?>
        <p class="so-sao">
            <img src='<?php echo $urlPublic?>/img/<?php echo $ketqua?>star.png' class='img-responsive img-center' width='150px'>
        </p>
        <p class="hidden bau-chon">
            <a href="javascript:void(0)" title="1 sao"><i class="fa fa-star-o" aria-hidden="true" onclick="vote(<?php echo $id_gs; ?>, 1)"></i></a>
            <a href="javascript:void(0)" title="2 sao"><i class="fa fa-star-o" aria-hidden="true" onclick="vote(<?php echo $id_gs; ?>, 2)"></i></a>
            <a href="javascript:void(0)" title="3 sao"><i class="fa fa-star-o" aria-hidden="true" onclick="vote(<?php echo $id_gs; ?>, 3)"></i></a>
            <a href="javascript:void(0)" title="4 sao"><i class="fa fa-star-o" aria-hidden="true" onclick="vote(<?php echo $id_gs; ?>, 4)"></i></a>
            <a href="javascript:void(0)" title="5 sao"><i class="fa fa-star-o" aria-hidden="true" onclick="vote(<?php echo $id_gs; ?>, 5)"></i></a>
        </p>    
        <?php
    }

    public function getComment(Request $request)
    {
        $arRequests = $request->all();

        $binhluan_gs = $arRequests['abinhluan_gs'];
        $id_gs = $arRequests['aid_gs'];

        $arLoginPhuHuynhs = $request->session()->get('arLoginPhuHuynh');
        $id_ph =  $arLoginPhuHuynhs[0]['id_ph'];
        $pfullname_ph =  $arLoginPhuHuynhs[0]['fullname_ph'];

        $arAdd = array(
    		'id_gs' => $id_gs, 
    		'id_ph' => $id_ph, 
            'noidung_cmt' => $binhluan_gs, 
            'time_cmt' => time(), 
		);

		$objQt = new Comment();
		$objQt->insert($arAdd);

        $arComments = DB::table('comment_gs as c')->join('phuhuynh as p', 'p.id_ph', '=', 'c.id_ph')
            ->where('c.id_gs','=', $id_gs)
            ->orderBy('id_cmt', 'desc')
            ->select('p.fullname_ph as pfullname_ph','c.noidung_cmt', 'c.time_cmt')
            ->paginate(5);


            if (!count($arComments)) {
                echo '<div class="thay-the">Không có bình luận</div>';

            }else{
                echo '<div class="thay-the"></div>';
                foreach ($arComments as $key => $arComment) {
                    $pfullname_ph = $arComment['pfullname_ph'];
                    $noidung_cmt = $arComment['noidung_cmt'];
                    $gio_cmt = date('h:i:s', $arComment['time_cmt']);
                    $ngay_cmt = date('d-m-Y', $arComment['time_cmt']);
                ?>  
            <div>
                <h5><?php echo $pfullname_ph ?> <span> lúc <?php echo $gio_cmt ?> ngày <?php echo $ngay_cmt ?></span></h5> 
                <p class="text-grey text-justify"><?php echo $noidung_cmt ?></p>
            </div>
        <?php
                }
            }
        ?>  
            
        </div>  
        <?php  

    }

    /*Tin nhắn - Phụ huynh*/

    public function tinnhan($id_gs, Request $request){
        $arLoginPhuHuynh = $request->session()->get('arLoginPhuHuynh');
        $id_ph =  $arLoginPhuHuynh[0]['id_ph'];

        $request->session()->put('chatidGS', $id_gs);

        /*Kiểm tra kết bạn*/
        $arCheckAddFriend = Confirm_gs::where('id_gs', '=', $id_gs)->where('id_ph', '=', $id_ph)->where('time_cf', '>', 0)->get();

        $checkkb = count($arCheckAddFriend);

        if($checkkb == 0){
            return redirect()->route('public.member.thongbao');
        }

        /*Lấy thông tin phụ huynh*/
        $arPhuHuynh = PhuHuynh::where('id_ph', '=', $id_ph)->select('id_ph', 'username_ph', 'fullname_ph')->get();

        /*Lấy thông tin Gia sư*/
        $arGiaSu = GiaSu::where('id_gs', '=', $id_gs)->select('id_gs', 'username_gs', 'fullname_gs', 'img_gs')->get();

        /*Lấy danh sách gia sư đã kết bạn*/
        $arDaKetBans = DB::table('confirm_gs as c')->join('giasu as g', 'g.id_gs', '=', 'c.id_gs')
        ->where('time_cf', '>', 0)->where('id_ph', '=', $id_ph)->select('g.img_gs as gimg_gs','g.fullname_gs as gfullname_gs', 'g.id_gs as gid_gs', 'g.username_gs as gusername_gs')->orderBy('g.id_gs', 'desc')->get();

        /*Lấy nội dung chat giữa gia sư và phụ huynh*/
        $arChats = DB::table('chat as c')->join('giasu as g', 'c.id_gs', '=', 'g.id_gs')->join('phuhuynh as p', 'p.id_ph', '=', 'c.id_ph')
        ->where('c.id_ph', '=', $id_ph)->where('c.id_gs', '=', $id_gs)
        ->select('g.id_gs as id_gs', 'img_gs', 'doituong', 'noidung_chat', 'time_chat')->get();

        return view('member.tinnhan', ['id_gs' => $id_gs, 'arChats' => $arChats, 'arDaKetBans' => $arDaKetBans, 'arPhuHuynh' => $arPhuHuynh, 'arGiaSu' => $arGiaSu]);
    }
    public function guitinnhan(Request $request){
        $arRequests = $request->all();

        $noidung_chat = e($arRequests['anoidung_chat']);
        $id_gs = $arRequests['aid_gs'];

        $arLoginPhuHuynhs = $request->session()->get('arLoginPhuHuynh');
        $id_ph =  $arLoginPhuHuynhs[0]['id_ph'];
        

        $arAdd = array(
            'id_gs' => $id_gs, 
            'id_ph' => $id_ph, 
            'doituong' => 1, 
            'noidung_chat' => $noidung_chat, 
            'time_chat' => time(), 
            'ph_seen' => 1, 
            'gs_seen' => 1, 
        );

        $objQt = new Chat();
        $objQt->insert($arAdd);

        /*Lấy nội dung chat giữa gia sư và phụ huynh*/
        $arChats = DB::table('chat as c')->join('giasu as g', 'c.id_gs', '=', 'g.id_gs')->join('phuhuynh as p', 'p.id_ph', '=', 'c.id_ph')
        ->where('c.id_ph', '=', $id_ph)->where('c.id_gs', '=', $id_gs)
        ->select('g.id_gs as id_gs', 'img_gs', 'doituong', 'noidung_chat', 'time_chat')->get();

        $urlPublic = getenv('PUBLIC_TEMPLATE_URL');
       
         foreach ($arChats as $key => $arChat) {
            $noidung_chat = $arChat['noidung_chat'];
            $doituong = $arChat['doituong'];
            $img_gs = $arChat['img_gs'];
            $time_chat = $arChat['time_chat'];

            $time_chat = date('H:i:s d/m/y', $time_chat);

            if($img_gs == ""){
                $img_gs = "no-avatar.png";
            }
        
            if($doituong == 0){
     ?>
    <div class="lv-item media">
        <div class="lv-avatar pull-left"> <img src="/storage/files/<?php echo $img_gs; ?>" alt=""> </div>
        <div class="media-body">
            <div class="ms-item"> <?php echo $noidung_chat; ?></div>
            <small class="ms-date"><span class="glyphicon glyphicon-time"></span>&nbsp; <?php echo $time_chat; ?></small> </div>
    </div>
    <?php 
            } else{
        
     ?>
     <div class="lv-item media right">
        <div class="lv-avatar pull-right"> <img src="<?php echo $urlPublic; ?>/img/noAvatar.png" alt=""> </div>
        <div class="media-body">
            <div class="ms-item"> <?php echo $noidung_chat; ?></div>
            <small class="ms-date"><span class="glyphicon glyphicon-time"></span>&nbsp; <?php echo $time_chat; ?></small> </div>
    </div>
    <?php
            }
        }
    }

    public function loadtinnhan(Request $request){
        $arRequests = $request->all();

        $id_gs = $request->session()->get('chatidGS');

        $arLoginPhuHuynhs = $request->session()->get('arLoginPhuHuynh');
        $id_ph =  $arLoginPhuHuynhs[0]['id_ph'];

        /*Lấy nội dung chat giữa gia sư và phụ huynh*/
        $arChats = DB::table('chat as c')->join('giasu as g', 'c.id_gs', '=', 'g.id_gs')->join('phuhuynh as p', 'p.id_ph', '=', 'c.id_ph')
        ->where('c.id_ph', '=', $id_ph)->where('c.id_gs', '=', $id_gs)
        ->select('g.id_gs as id_gs', 'img_gs', 'doituong', 'noidung_chat', 'time_chat')->get();

        $urlPublic = getenv('PUBLIC_TEMPLATE_URL');
       
         foreach ($arChats as $key => $arChat) {
            $noidung_chat = $arChat['noidung_chat'];
            $doituong = $arChat['doituong'];
            $img_gs = $arChat['img_gs'];
            $time_chat = $arChat['time_chat'];

            $time_chat = date('H:i:s d/m/y', $time_chat);

            if($img_gs == ""){
                $img_gs = "no-avatar.png";
            }
        
            if($doituong == 0){
     ?>
    <div class="lv-item media">
        <div class="lv-avatar pull-left"> <img src="/storage/files/<?php echo $img_gs; ?>" alt=""> </div>
        <div class="media-body">
            <div class="ms-item"> <?php echo $noidung_chat; ?></div>
            <small class="ms-date"><span class="glyphicon glyphicon-time"></span>&nbsp; <?php echo $time_chat; ?></small> </div>
    </div>
    <?php 
            } else{
        
     ?>
     <div class="lv-item media right">
        <div class="lv-avatar pull-right"> <img src="<?php echo $urlPublic; ?>/img/noAvatar.png" alt=""> </div>
        <div class="media-body">
            <div class="ms-item"> <?php echo $noidung_chat; ?></div>
            <small class="ms-date"><span class="glyphicon glyphicon-time"></span>&nbsp; <?php echo $time_chat; ?></small> </div>
    </div>
    <?php
            }
        }
    }

    /*Tin nhắn - Gia sư*/

    public function message($id_ph, Request $request){
        $arLoginGiaSus = $request->session()->get('arLoginGiaSu');
        $id_gs =  $arLoginGiaSus[0]['id_gs'];

        $request->session()->put('chatidPH', $id_ph);

        /*Kiểm tra kết bạn*/
        $arCheckAddFriend = Confirm_gs::where('id_gs', '=', $id_gs)->where('id_ph', '=', $id_ph)->where('time_cf', '>', 0)->get();

        $checkkb = count($arCheckAddFriend);

        if($checkkb == 0){
            return redirect()->route('public.member.notification');
        }

        /*Lấy thông tin phụ huynh*/
        $arPhuHuynh = PhuHuynh::where('id_ph', '=', $id_ph)->select('id_ph', 'username_ph', 'fullname_ph')->get();

        /*Lấy thông tin Gia sư*/
        $arGiaSu = GiaSu::where('id_gs', '=', $id_gs)->select('id_gs', 'username_gs', 'fullname_gs', 'img_gs')->get();

        /*Lấy danh sách phụ huynh đã kết bạn*/
        $arDaKetBans = DB::table('confirm_gs as c')->join('phuhuynh as p', 'p.id_ph', '=', 'c.id_ph')
        ->where('time_cf', '>', 0)->where('id_gs', '=', $id_gs)->select('p.fullname_ph as pfullname_ph', 'p.id_ph as pid_ph')->orderBy('p.id_ph', 'desc')->get();

        /*Lấy nội dung chat giữa gia sư và phụ huynh*/
        $arChats = DB::table('chat as c')->join('giasu as g', 'c.id_gs', '=', 'g.id_gs')->join('phuhuynh as p', 'p.id_ph', '=', 'c.id_ph')
        ->where('c.id_ph', '=', $id_ph)->where('c.id_gs', '=', $id_gs)
        ->select('g.id_gs as id_gs', 'img_gs', 'doituong', 'noidung_chat', 'time_chat')->get();

        return view('member.message', ['arPhuHuynh' => $arPhuHuynh, 'arGiaSu' => $arGiaSu, 'arDaKetBans' => $arDaKetBans, 'arChats' => $arChats]);
    }

    public function sendmessage(Request $request){
        $arRequests = $request->all();

        $noidung_chat = e($arRequests['anoidung_chat']);
        $id_ph = $arRequests['aid_ph'];

        $arLoginGiaSus = $request->session()->get('arLoginGiaSu');
        $id_gs =  $arLoginGiaSus[0]['id_gs'];
        

        $arAdd = array(
            'id_gs' => $id_gs, 
            'id_ph' => $id_ph, 
            'doituong' => 0, 
            'noidung_chat' => $noidung_chat, 
            'time_chat' => time(), 
            'ph_seen' => 1, 
            'gs_seen' => 1, 
        );

        $objQt = new Chat();
        $objQt->insert($arAdd);

        /*Lấy nội dung chat giữa gia sư và phụ huynh*/
        $arChats = DB::table('chat as c')->join('giasu as g', 'c.id_gs', '=', 'g.id_gs')->join('phuhuynh as p', 'p.id_ph', '=', 'c.id_ph')
        ->where('c.id_ph', '=', $id_ph)->where('c.id_gs', '=', $id_gs)
        ->select('g.id_gs as id_gs', 'img_gs', 'doituong', 'noidung_chat', 'time_chat')->get();

        $urlPublic = getenv('PUBLIC_TEMPLATE_URL');
       
         foreach ($arChats as $key => $arChat) {
            $noidung_chat = $arChat['noidung_chat'];
            $doituong = $arChat['doituong'];
            $img_gs = $arChat['img_gs'];
            $time_chat = $arChat['time_chat'];

            $time_chat = date('H:i:s d/m/y', $time_chat);

            if($img_gs == ""){
                $img_gs = "no-avatar.png";
            }
        
            if($doituong == 1){
     ?>
    <div class="lv-item media">
        <div class="lv-avatar pull-left"> <img src="/storage/files/<?php echo $img_gs; ?>" alt=""> </div>
        <div class="media-body">
            <div class="ms-item"> <?php echo $noidung_chat; ?></div>
            <small class="ms-date"><span class="glyphicon glyphicon-time"></span>&nbsp; <?php echo $time_chat; ?></small> </div>
    </div>
    <?php 
            } else{
        
     ?>
     <div class="lv-item media right">
        <div class="lv-avatar pull-right"> <img src="<?php echo $urlPublic; ?>/img/noAvatar.png" alt=""> </div>
        <div class="media-body">
            <div class="ms-item"> <?php echo $noidung_chat; ?></div>
            <small class="ms-date"><span class="glyphicon glyphicon-time"></span>&nbsp; <?php echo $time_chat; ?></small> </div>
    </div>
    <?php
            }
        }
    }

    public function loadmessage(Request $request){
        $arRequests = $request->all();

        $id_ph = $request->session()->get('chatidPH');

        $arLoginGiaSus = $request->session()->get('arLoginGiaSu');
        $id_gs =  $arLoginGiaSus[0]['id_gs'];

        /*Lấy nội dung chat giữa gia sư và phụ huynh*/
        $arChats = DB::table('chat as c')->join('giasu as g', 'c.id_gs', '=', 'g.id_gs')->join('phuhuynh as p', 'p.id_ph', '=', 'c.id_ph')
        ->where('c.id_ph', '=', $id_ph)->where('c.id_gs', '=', $id_gs)
        ->select('g.id_gs as id_gs', 'img_gs', 'doituong', 'noidung_chat', 'time_chat')->get();

        $urlPublic = getenv('PUBLIC_TEMPLATE_URL');
       
         foreach ($arChats as $key => $arChat) {
            $noidung_chat = $arChat['noidung_chat'];
            $doituong = $arChat['doituong'];
            $img_gs = $arChat['img_gs'];
            $time_chat = $arChat['time_chat'];

            $time_chat = date('H:i:s d/m/y', $time_chat);

            if($img_gs == ""){
                $img_gs = "no-avatar.png";
            }
        
            if($doituong == 1){
     ?>
    <div class="lv-item media">
        <div class="lv-avatar pull-left"> <img src="/storage/files/<?php echo $img_gs; ?>" alt=""> </div>
        <div class="media-body">
            <div class="ms-item"> <?php echo $noidung_chat; ?></div>
            <small class="ms-date"><span class="glyphicon glyphicon-time"></span>&nbsp; <?php echo $time_chat; ?></small> </div>
    </div>
    <?php 
            } else{
        
     ?>
     <div class="lv-item media right">
        <div class="lv-avatar pull-right"> <img src="<?php echo $urlPublic; ?>/img/noAvatar.png" alt=""> </div>
        <div class="media-body">
            <div class="ms-item"> <?php echo $noidung_chat; ?></div>
            <small class="ms-date"><span class="glyphicon glyphicon-time"></span>&nbsp; <?php echo $time_chat; ?></small> </div>
    </div>
    <?php
            }
        }
    }

}



