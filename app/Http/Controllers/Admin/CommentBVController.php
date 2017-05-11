<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\CommentBV;

class CommentBVController extends Controller
{
    public function index(){

    	$arComments = DB::table('comment_bv as c')->join('baiviet as b', 'b.id_post', '=', 'c.id_bv')
    	->orderBy('id_cmt', 'desc')
    	->select('id_cmt','hoten_cmt','email_cmt', 'noidung_cmt', 'time_cmt', 'tenpost', 'id_bv')->paginate(15);

    	return view('admin.commentbv.index', ['arComments' => $arComments]);
    }

    public function del($id, Request $request){
    	CommentBV::find($id)->delete();
    	
    	$request->session()->flash('msg', 'Đã xóa thành công');
    	return redirect()->action("Admin\CommentBVController@index");
    }
}
