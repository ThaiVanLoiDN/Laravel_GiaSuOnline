<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckSmod;
use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\CheckGiaSu;
use App\Http\Middleware\CheckPhuHuynh;
use App\Http\Middleware\CheckGiaSuOrPhuHuynh;


Route::pattern('id', '([0-9]+)');
Route::pattern('slug', '(.)+');

Route::get('my-test-mail','HomeController@myTestMail');
/*--------------------Trang chủ--------------------*/
Route::get('/', [
	'as' => 'public.index.index',
	'uses' => 'IndexController@index',
]);
Route::post('/lien-he.html', [
	'as' => 'public.index.lienhe',
	'uses' => 'IndexController@postAddLienHe',
]);

/*--------------------Tin tức--------------------*/
Route::get('/danh-muc/{slug}-{id}.html', [
	'as' => 'public.news.cat',
	'uses' => 'NewsController@cat',
]);

Route::get('bai-viet.html', [
	'as' => 'public.news.index',
	'uses' => 'NewsController@index',
]);

Route::get('/{slug}-{id}', [
	'as' => 'public.news.detail',
	'uses' => 'NewsController@detail',
]);
Route::get('/binh-luan-bai-viet.html', [
	'as' => 'public.news.getComment',
	'uses' => 'NewsController@getComment',
]);

/*--------------------Member--------------------*/
Route::group(['middleware' => CheckGiaSu::class], function() {
	Route::get('/trang-ca-nhan.html', [
		'as' => 'public.member.myprofile',
		'uses' => 'MemberController@myprofile',
	]);

	Route::get('/chinh-sua-thong-tin.html', [
		'as' => 'public.member.editprofile',
		'uses' => 'MemberController@getEditprofile',
	]);

	Route::post('/chinh-sua-thong-tin.html', [
		'as' => 'public.member.editprofile',
		'uses' => 'MemberController@postEditprofile',
	]);

	Route::get('/dang-ky-mon.html', [
		'as' => 'public.member.dangkymon',
		'uses' => 'MemberController@getDangKyMon',
	]);

	Route::post('/dang-ky-mon.html', [
		'as' => 'public.member.dangkymon',
		'uses' => 'MemberController@postDangKyMon',
	]);

	Route::get('/notification.html', [
		'as' => 'public.member.notification',
		'uses' => 'MemberController@notification',
	]);

	Route::get('/message-{id}.html', [
		'as' => 'public.tuongtac.message',
		'uses' => 'TuongTacController@message',
	]);

	Route::get('/sendmessage.html', [
		'as' => 'public.tuongtac.sendmessage',
		'uses' => 'TuongTacController@sendmessage',
	]);

	Route::get('/loadmessage.html', [
		'as' => 'public.tuongtac.loadmessage',
		'uses' => 'TuongTacController@loadmessage',
	]);

	Route::get('/tu-choi-ket-ban/{id}.html', [
		'as' => 'public.tuongtac.tuchoi',
		'uses' => 'TuongTacController@tuchoiKetBan',
	]);

	Route::get('/dong-y-ket-ban/{id}.html', [
		'as' => 'public.tuongtac.dongy',
		'uses' => 'TuongTacController@dongYKetBan',
	]);
});	

Route::group(['middleware' => CheckPhuHuynh::class], function() {
	Route::get('/gia-su/{slug}', [
		'as' => 'public.member.profile',
		'uses' => 'MemberController@profile',
	]);

	Route::get('/chinh-sua.html', [
		'as' => 'public.member.editinfo',
		'uses' => 'MemberController@getEditinfo',
	]);

	Route::post('/chinh-sua.html', [
		'as' => 'public.member.editinfo',
		'uses' => 'MemberController@postEditinfo',
	]);
	Route::get('/tin-nhan-{id}.html', [
		'as' => 'public.tuongtac.tinnhan',
		'uses' => 'TuongTacController@tinnhan',
	]);
	Route::get('/guitinnhan.html', [
		'as' => 'public.tuongtac.guitinnhan',
		'uses' => 'TuongTacController@guitinnhan',
	]);

	Route::get('/loadtinnhan.html', [
		'as' => 'public.tuongtac.loadtinnhan',
		'uses' => 'TuongTacController@loadtinnhan',
	]);

	Route::get('/thong-bao.html', [
		'as' => 'public.member.thongbao',
		'uses' => 'MemberController@thongbao',
	]);

	Route::post('/tim-gia-su.html', [
		'as' => 'public.search.ketquagiasu',
		'uses' => 'SearchController@postSearch',
	]);


	Route::get('/huy-ket-ban/{id}.html', [
		'as' => 'public.tuongtac.huy',
		'uses' => 'TuongTacController@huyKetBan',
	]);

	Route::get('/ket-ban/{id}.html', [
		'as' => 'public.tuongtac.ketban',
		'uses' => 'TuongTacController@ketBan',
	]);

	Route::get('/like.html', [
		'as' => 'public.tuongtac.like',
		'uses' => 'TuongTacController@like',
	]);

	Route::get('/vote.html', [
		'as' => 'public.tuongtac.vote',
		'uses' => 'TuongTacController@vote',
	]);

	Route::get('/dislike.html', [
		'as' => 'public.tuongtac.dislike',
		'uses' => 'TuongTacController@dislike',
	]);

	Route::get('/unlike.html', [
		'as' => 'public.tuongtac.unlike',
		'uses' => 'TuongTacController@unlike',
	]);

	Route::get('/undislike.html', [
		'as' => 'public.tuongtac.undislike',
		'uses' => 'TuongTacController@undislike',
	]);

	Route::get('/binh-luan.html', [
		'as' => 'public.tuongtac.binhluan',
		'uses' => 'TuongTacController@getComment',
	]);

});	

/*Route::group(['middleware' => CheckGiaSuOrPhuHuynh::class], function() {*/
	


/*});	*/


/*Gia sư*/
Route::get('/sign-up.html', [
	'as' => 'public.member.signup',
	'uses' => 'MemberController@getSignup',
]);
Route::post('/sign-up.html', [
	'as' => 'public.member.signup',
	'uses' => 'MemberController@postSignup',
]);
Route::post('/login.html', [
	'as' => 'public.member.login',
	'uses' => 'MemberController@postLogin',
]);


/*Phụ huynh*/

Route::get('/dang-ky.html', [
	'as' => 'public.member.dangky',
	'uses' => 'MemberController@getDangKy',
]);
Route::post('/dang-ky.html', [
	'as' => 'public.member.dangky',
	'uses' => 'MemberController@postDangKy',
]);

Route::post('/dang-nhap.html', [
	'as' => 'public.member.dangnhap',
	'uses' => 'MemberController@postDangNhap',
]);
/*--------------*/

Route::get('/dang-xuat.html', [
	'as' => 'public.member.logout',
	'uses' => 'MemberController@logout',
]);


/*Tìm kiếm*/


/*-----------------------------------------------------------------------*/
	/*Admin*/
Route::group(['middleware' => CheckAdmin::class], function() {
	Route::get('/u/{slug}', [
		'as' => 'admin.member.trangcanhan',
		'uses' => 'MemberController@trangcanhan',
	]);

	Route::get('/qtri/quan-tri.html', [
		'as' => 'admin.quantri.index',
		'uses' => 'Admin\QuanTriController@index',
	]);	

	Route::post('/qtri/quan-tri-add.html', [
		'as' => 'admin.quantri.add',
		'uses' => 'Admin\QuanTriController@add',
	]);	
	Route::get('/qtri/quan-tri/del-{id}.html', [
		'as' => 'admin.quantri.del',
		'uses' => 'Admin\QuanTriController@del',
	]);

	Route::post('/qtri/quan-tri/edit.html', [
		'as' => 'admin.quantri.edit',
		'uses' => 'Admin\QuanTriController@postEdit',
	]);

});	

	/*Smod*/
Route::group(['middleware' => CheckSmod::class], function() {
	Route::get('/qtri/gia-su.html', [
		'as' => 'admin.giasu.index',
		'uses' => 'Admin\GiaSuController@index',
	]);
	Route::get('/qtri/gia-su-sua-{id}.html', [
		'as' => 'admin.giasu.sua',
		'uses' => 'Admin\GiaSuController@getEdit',
	]);

	Route::post('/qtri/gia-su-sua-{id}.html', [
		'as' => 'admin.giasu.sua',
		'uses' => 'Admin\GiaSuController@postEdit',
	]);

	Route::get('/qtri/gia-su-ajax.html', [
		'as' => 'admin.giasu.ajax',
		'uses' => 'Admin\GiaSuController@getAjax',
	]);

	/*Phụ Huynh*/
	Route::get('/qtri/phu-huynh.html', [
		'as' => 'admin.phuhuynh.index',
		'uses' => 'Admin\PhuHuynhController@index',
	]);
	Route::get('/qtri/phu-huynh-sua-{id}.html', [
		'as' => 'admin.phuhuynh.sua',
		'uses' => 'Admin\PhuHuynhController@getEdit',
	]);
	Route::post('/qtri/phu-huynh-sua-{id}.html', [
		'as' => 'admin.phuhuynh.sua',
		'uses' => 'Admin\PhuHuynhController@postEdit',
	]);
	Route::get('/qtri/phu-huynh-ajax.html', [
		'as' => 'admin.phuhuynh.ajax',
		'uses' => 'Admin\PhuHuynhController@getAjax',
	]);

	/*Comment*/
	Route::get('/qtri/binh-luan.html', [
		'as' => 'admin.comment.index',
		'uses' => 'Admin\CommentController@index',
	]);	

	Route::get('/qtri/binh-luan/del-{id}.html', [
		'as' => 'admin.comment.del',
		'uses' => 'Admin\CommentController@del',
	]);

});		

/*Mod*/
Route::group(['middleware' => CheckLogin::class], function() {
	Route::get('/qtri/', [
		'as' => 'admin.index.index',
		'uses' => 'Admin\IndexController@index',
	]);

	/*Bài viết*/
	Route::get('/qtri/bai-viet.html', [
		'as' => 'admin.news.index',
		'uses' => 'Admin\NewsController@index',
	]);

	Route::get('/qtri/bai-viet-ajax.html', [
		'as' => 'admin.news.ajax',
		'uses' => 'Admin\NewsController@getAjax',
	]);

	Route::get('/qtri/bai-viet/add.html', [
		'as' => 'admin.news.add',
		'uses' => 'Admin\NewsController@getAdd',
	]);

	Route::post('/qtri/bai-viet/add.html', [
		'as' => 'admin.news.add',
		'uses' => 'Admin\NewsController@postAdd',
	]);

	Route::get('/qtri/bai-viet/del-{id}.html', [
		'as' => 'admin.baiviet.del',
		'uses' => 'Admin\NewsController@del',
	]);

	Route::get('/qtri/bai-viet/edit-{id}.html', [
		'as' => 'admin.baiviet.edit',
		'uses' => 'Admin\NewsController@getEdit',
	]);

	Route::post('/qtri/bai-viet/edit-{id}.html', [
		'as' => 'admin.baiviet.edit',
		'uses' => 'Admin\NewsController@postEdit',
	]);

	Route::get('/qtri/chuyen-muc/del-{id}.html', [
		'as' => 'admin.cat.del',
		'uses' => 'Admin\NewsController@delCat',
	]);
	Route::post('/qtri/chuyen-muc/edit.html', [
		'as' => 'admin.cat.edit',
		'uses' => 'Admin\NewsController@editCat',
	]);
	Route::post('/qtri/chuyen-muc/add.html', [
		'as' => 'admin.cat.add',
		'uses' => 'Admin\NewsController@postAddCat',
	]);

	/*Slide*/

	Route::get('/qtri/slide.html', [
		'as' => 'admin.slide.index',
		'uses' => 'Admin\SlideController@index',
	]);
	Route::get('/qtri/slide/del-{id}.html', [
		'as' => 'admin.slide.del',
		'uses' => 'Admin\SlideController@del',
	]);
	Route::get('/qtri/slide-add.html', [
		'as' => 'admin.slide.add',
		'uses' => 'Admin\SlideController@getAdd',
	]);
	Route::post('/qtri/slide-add.html', [
		'as' => 'admin.slide.add',
		'uses' => 'Admin\SlideController@postAdd',
	]);

	Route::get('/qtri/slide-edit-{id}.html', [
		'as' => 'admin.slide.edit',
		'uses' => 'Admin\SlideController@getEdit',
	]);
	Route::post('/qtri/slide-edit-{id}.html', [
		'as' => 'admin.slide.edit',
		'uses' => 'Admin\SlideController@postEdit',
	]);

	/*Quảng cáo*/

	Route::get('/qtri/quang-cao.html', [
		'as' => 'admin.quangcao.index',
		'uses' => 'Admin\QuangCaoController@index',
	]);
	Route::get('/qtri/quang-cao/del-{id}.html', [
		'as' => 'admin.quangcao.del',
		'uses' => 'Admin\QuangCaoController@del',
	]);
	Route::get('/qtri/quang-cao-add.html', [
		'as' => 'admin.quangcao.add',
		'uses' => 'Admin\QuangCaoController@getAdd',
	]);
	Route::post('/qtri/quang-cao-add.html', [
		'as' => 'admin.quangcao.add',
		'uses' => 'Admin\QuangCaoController@postAdd',
	]);
	Route::get('/qtri/quang-cao/edit-{id}.html', [
		'as' => 'admin.quangcao.edit',
		'uses' => 'Admin\QuangCaoController@getEdit',
	]);
	Route::post('/qtri/quang-cao/edit-{id}.html', [
		'as' => 'admin.quangcao.edit',
		'uses' => 'Admin\QuangCaoController@postEdit',
	]);

	Route::get('/qtri/quang-cao-ajax.html', [
		'as' => 'admin.quangcao.ajax',
		'uses' => 'Admin\QuangCaoController@getAjax',
	]);

	/*Liên hê*/

	Route::get('/qtri/lien-he.html', [
		'as' => 'admin.lienhe.index',
		'uses' => 'Admin\LienHeController@index',
	]);
	Route::get('/qtri/lien-he/del-{id}.html', [
		'as' => 'admin.lienhe.del',
		'uses' => 'Admin\LienHeController@del',
	]);
	Route::post('/qtri/lien-he/del-nhieu.html', [
		'as' => 'admin.lienhe.delnhieu',
		'uses' => 'Admin\LienHeController@postDelnhieu',
	]);


	Route::get('/qtri/dang-xuat.html', [
		'as' => 'admin.quantri.logout',
		'uses' => 'Admin\QuanTriController@logout',
	]);


	/*Comment bài viết*/
	Route::get('/qtri/binh-luan-bv.html', [
		'as' => 'admin.commentbv.index',
		'uses' => 'Admin\CommentBVController@index',
	]);	

	Route::get('/qtri/binh-luan-bv/del-{id}.html', [
		'as' => 'admin.commentbv.del',
		'uses' => 'Admin\CommentBVController@del',
	]);

	/*Cấp lớp học*/

	Route::get('/qtri/cap-lop.html', [
		'as' => 'admin.caplop.index',
		'uses' => 'Admin\CapLopController@index',
	]);

	Route::get('/qtri/cap-hoc/del-{id}.html', [
		'as' => 'admin.cap.del',
		'uses' => 'Admin\CapLopController@delCap',
	]);
	Route::post('/qtri/cap-hoc/add.html', [
		'as' => 'admin.cap.add',
		'uses' => 'Admin\CapLopController@postAddCap',
	]);

	Route::post('/qtri/cap-hoc/edit.html', [
		'as' => 'admin.cap.edit',
		'uses' => 'Admin\CapLopController@editCap',
	]);

	Route::post('/qtri/mon-hoc/add.html', [
		'as' => 'admin.mon.add',
		'uses' => 'Admin\CapLopController@postAddMon',
	]);

	Route::post('/qtri/mon-hoc/edit.html', [
		'as' => 'admin.mon.edit',
		'uses' => 'Admin\CapLopController@editMon',
	]);

	Route::post('/qtri/lop-hoc/add.html', [
		'as' => 'admin.lop.add',
		'uses' => 'Admin\CapLopController@postAdd',
	]);

	Route::get('/qtri/lop-hoc/del-{id}.html', [
		'as' => 'admin.lop.del',
		'uses' => 'Admin\CapLopController@del',
	]);
	Route::post('/qtri/lop-hoc/edit.html', [
		'as' => 'admin.lop.edit',
		'uses' => 'Admin\CapLopController@editLop',
	]);

	Route::get('/qtri/mon-hoc/del-{id}.html', [
		'as' => 'admin.mon.del',
		'uses' => 'Admin\CapLopController@delMon',
	]);

	/*Giới thiệu web*/
	Route::get('/qtri/gioi-thieu/index.html', [
		'as' => 'admin.gioithieu.index',
		'uses' => 'Admin\GioiThieuController@getGt',
	]);

	Route::post('/qtri/gioi-thieu/index.html', [
		'as' => 'admin.gioithieu.index',
		'uses' => 'Admin\GioiThieuController@postGt',
	]);


});

Route::get('/qtri/dang-nhap.html', [
	'as' => 'admin.quantri.login',
	'uses' => 'Admin\QuanTriController@getLogin',
]);

Route::post('/qtri/dang-nhap.html', [
	'as' => 'admin.quantri.login',
	'uses' => 'Admin\QuanTriController@postLogin',
]);


?>