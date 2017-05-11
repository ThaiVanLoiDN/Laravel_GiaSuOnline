<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;
use Log;

use App\Mail\MyTestMail;


class HomeController extends Controller

{


    /**

     * Send My Test Mail Example

     *

     * @return void

     */

    public function myTestMail()

    {
        $noidungmail = "Chào moijto ngày mới";

       Mail::raw($noidungmail, function($message){

        $message->from('hoangvan252@gmail.com', 'HoangVan');
        $message->subject('Đây là tiêu đề');
        $message->to('thaivanloidn@gmail.com');

        Log::info('End of mail');


       });

       Log::info('OK');

       return redirect()->action("IndexController@index");

    }


}
?>