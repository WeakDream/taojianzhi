<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\User;

class UserController extends Controller {
    public function register()
    {
        return view ("taojianzhi/register",["error1"=>null]);
    }
    public function register_check(Request $request)
    {
        $input['email']=$request->get('email');
        $input['nickname']=$request->get('nickName');
        $input['password']=$request->get('password');
        $input['email_verified']=1;
        $input['sex']=1;
        $input['company_id']=$request->get('maijia');
        $length=strlen($input['nickname']);
        if($length>20||$length<5)
        {
            return redirect()->back()->withErrors(["error"=>"用户的名字长度不符合规定"]);
        }
        else
        {
            $gets = DB::table('users')->where('nickname', $input['nickname'])->first();
            if ($gets)
            {
                return redirect()->back()->withErrors(['error1' => "该用户名已经被占用"]);
            }
            else
            {
                User::create($input);
                return view("taojianzhi/login");
            }
        }
    }
    public function login()
    {
        return view("taojianzhi/login",["m"=>null]);
    }
    public function login_check(Request $request)
    {
        $name=$request->get("username");
        $password=$request->get("password");
        $get1=DB::table("users")->where("email","=",$name)->orwhere("nickname","=",$name)->first();
        if(!$get1)
        {
            //return view("taojianzhi/login",["m"=>"该用户不存在"]);
            return redirect()->back()->withErrors(['error1' => "该用户名不存在"]);
        }
        else
        {
            $get_password=$get1->password;
            if($password==$get_password)
            {
                Session::put("username",$get1->nickname);
                //$id=$get1->id;

                $inputs=DB::table("jobs")->paginate(8);
                return view("taojianzhi/index",["inputs"=>$inputs]);

            }
            else
            {
                //return view("taojianzhi/login",["m"=>"密码错误"]);
                return redirect()->back()->withErrors(['error1' => "密码错误"]);
            }

        }
    }
    public function login_out()
    {
        Session::flush("username");
        return redirect()->to("index");
    }


}
