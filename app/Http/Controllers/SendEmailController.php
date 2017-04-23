<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Mail;

class SendEmailController extends Controller {

	public function  sendsuccess()
    {
        $data=['email'=>'1485846902@qq.com','name'=>'zhao'];
        Mail::send('send',$data,function($message)use($data)
        {
            $message->to($data['email'],$data['name'])->subject("淘兼职");
        });
       return redirect()->to('personal_center');
    }

}
