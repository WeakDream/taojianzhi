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
        $get=DB::table("users")->where("nickname",$name)->first();
        $gets_job=DB::table("company_save")->where("username",$name)->get();
        $id=$get->company_id;
        //dd($id);
        if($id==0)
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
    public  function complate_personal_resume()
    {
        //$name=Session::get("username");
        if(!$this->is_login())
        {
            return redirect()->to("login");
        }
        return view ("taojianzhi/complate_resume");
    }

}
