<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\resume_TJZ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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
        $puts=array();
        $name=Session::get("username");
        if(!$this->is_login())
        {
            return redirect()->to("login");
        }
        //dd($name);
        $get=DB::table("users")->where("nickname",$name)->first();
        $logs=DB::table("user_logs")->where("user",$name)->orderBy('updated_at','desc')->get();
        $length=count($logs);
        if($length>5)
        {
            for($i=0;$i<5;$i++)
            {
                $puts[$i]=$logs[$i];
            }
        }
        else
        {
            $puts=$logs;
        }
        //dd($logs);
        //$gets_job=DB::table("job_save")->where("username",$name)->get();
        $id=$get->role_id;
        //dd($id);

            return view("taojianzhi/new_peersonal_center",["logs"=>$puts]);
    }
    //浏览记录的删除
    public function logs_delete($company_name)
    {
        $return=DB::table('user_logs')->where('company_name',$company_name)->delete();
        return redirect()->to('personal_center');
    }
    public function  save()
    {
        $name=Session::get("username");
        $gets_job=DB::table("job_save")->where("username",$name)->get();
        return view("taojianzhi/save",['job_gets'=>$gets_job]);
    }
}
