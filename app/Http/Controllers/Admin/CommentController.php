<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Comment;

class CommentController extends Controller
{
    public function index(){

    	$arComments = DB::table('comment_gs as c')->join('phuhuynh as p', 'p.id_ph', '=', 'c.id_ph')
    	->join('giasu as g', 'g.id_gs', '=', 'c.id_gs')
    	->orderBy('id_cmt', 'desc')
    	->select('c.id_cmt','p.fullname_ph','g.fullname_gs','g.username_gs', 'c.noidung_cmt', 'c.time_cmt')->paginate(15);


    	//$arComments = Comment::orderBy('id_cmt', 'desc')->paginate(10);
    	return view('admin.comment.index', ['arComments' => $arComments]);
    }

    public function del($id, Request $request){
    	Comment::find($id)->delete();
    	
    	$request->session()->flash('msg', 'Đã xóa thành công');
    	return redirect()->action("Admin\CommentController@index");
    }
}
