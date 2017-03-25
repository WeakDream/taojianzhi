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
        $gets_job=DB::table("job_save")->where("username",$name)->get();
        $id=$get->role_id;
        //dd($id);
        if($id==1)
        {
            return view("taojianzhi/Seller_Center");
        }
        else
        {
            return view("taojianzhi/personal_center",["company_gets"=>$gets_job,"logs"=>$puts]);
        }
    }
    public function personal_resume($username)
    {
        $user_data=DB::table("users")->where("nickname",$username)->first();
        $user_resume=DB::table("resumes")->where("user_id",$user_data->id)->first();
        if(!$this->is_login())
        {
            return redirect()->to("login");
        }
        return view ("taojianzhi/resume",compact('user_data','user_resume'));
    }
    public function complate_personal_resume()
    {
        return view ("taojianzhi/complate_resume");
    }

    public function complate_resume(Requests\ResumeRequest $request){
        $UserName=Session::get("username");
        $get_user=DB::table("users")->where("nickname",$UserName)->first();
        $UserId = $get_user->id;
        $user_phone=$get_user->phone;
        //dd($user_phone);
        //dd($UserId);
        $resume = new resume_TJZ();
        $file = $request->file('user_head');
        $entension = $file->getClientOriginalExtension();
        //dd($entension);
        $newName = $UserId."face".".".$entension;
        //$path = $file -> move('public/facebook',$newName);
        //dd($path);
        $save_path='/public/facebook/'.$newName;
        //dd($save_path);
        //dd($file);
        $user_data=$request->all();
        $user_data['photo']=$save_path;
        $user_data['school']=null;//搞啥？
        $user_data['contact']=$user_phone;//联系电话
        $user_data['city']=$request->get('Province').$request->get('City').$request->get('Area');
        $user_data['expect_location']=$request->get('EProvince').$request->get('ECity').$request->get('EArea');
        $user_data['user_id']=$UserId;
        //dd($user_data);
        $resume->complete($user_data);
        Session::put('resume_state',1);
        return redirect()->to('resume',['username' => $UserName]);
    }
}
