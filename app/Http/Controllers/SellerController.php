<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use \Illuminate\Mail;

class SellerController extends Controller {

	public function send_email()
    {
        $data=['email'=>'1485846902@qq.com','name'=>'zhao'];
        Mail::send('activemail',$data,function($message)use($data)
        {
            $message->to($data['email'],$data['name'])->subject("淘兼职");
        });
    }

}
