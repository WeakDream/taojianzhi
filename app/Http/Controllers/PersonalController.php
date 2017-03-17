<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class PersonalController extends Controller {
    public function is_login()
    {
        $name=Session::get("username");
        if($name)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

	public function personal_center()
    {
        $name=Session::get("username");
        if(!$this->is_login())
        {
            return redirect()->to("login");
        }
        //dd($name);
        $get=DB::table("users")->where("nickname",$name)->first();//重名
        $gets_job=DB::table("orders")->where("applicant_name",$name)->get();
        $id=$get->role_id;
        //dd($id);
        if($id==1)
        {
            return view("taojianzhi/Seller_Center");
        }
        else
        {
            return view("taojianzhi/personal_center",["company_gets"=>$gets_job]);
        }
    }
    public function personal_resume()
    {
        if(!$this->is_login())
        {
            return redirect()->to("login");
        }
        return view ("taojianzhi/resume");
    }
    public function complate_personal_resume()
    {
        return view ("taojianzhi/complate_resume");
    }

    public function complate_resume(){
        $UserName=Session::get("username");
        $get_user=DB::table("users")->where("nickname",$UserName)->first();
        $UserId = $get_user->id;

    }
}
