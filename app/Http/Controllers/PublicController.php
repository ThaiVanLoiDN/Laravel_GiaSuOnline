<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\GiaTri;

class PublicController extends Controller
{
    public function __construct(){
    	$Views = GiaTri::where('id_gt', '=', 2)->get();
    	
    	$doc = $Views[0]['gt'];

 		//echo $doc;die();

    	/*Tăng view*/
        $objQt = new GiaTri();
        $getByGt = $objQt->find(2);

        $getByGt->gt = ($doc + 1);
        $getByGt->save();
    }
}
