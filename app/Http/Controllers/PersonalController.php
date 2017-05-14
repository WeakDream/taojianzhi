<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\resume_TJZ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Array_;

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
        $user_id=DB::table('users')->where('nickname',$name)->first()->id;
        if(!$this->is_login())
        {
            return redirect()->to("login");
        }
        //dd($name);
        $get=DB::table("users")->where("nickname",$name)->first();
        $logs=DB::table("user_logs")->where("user",$name)->orderBy('updated_at','desc')->get();
        $buys=DB::table("tjz_jobs")->join('job_apply','job_apply.job_id','=','tjz_jobs.id')->where('user_id',$user_id)->where("status",0)->get();
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
        //dd($buys);
        $length=count($buys);
        for($i=0;$i<$length;$i++)
        {
            if($buys[$i]->job_type==1)
            {
                $buys[$i]->company_name="个人类兼职";
            }
        }
            return view("taojianzhi/new_peersonal_center",["logs"=>$puts,"buys"=>$buys]);
    }
    //浏览记录的删除
    public function logs_delete($company_name)
    {
        $return=DB::table('user_logs')->where('company_name',$company_name)->delete();
        return redirect()->to('personal_center');
    }
    public function save()
    {
        $name=Session::get("username");
        $user_id = DB::table("users")->where("nickname",$name)->value('id');
        $gets_job=DB::table("job_save")->where("username",$name)->get();//收藏的公司
        $gets_resume=DB::table("resume_save")->where('user_id',$user_id)->get(['resume_id']);//获取所有被该用户收藏的简历id
        //dd($gets_resume);
        $resume = new resume_TJZ();
        $i=0;
        $resumes = Array();
        if($gets_resume){
            foreach ($gets_resume as $resume_id){
                $resumes[$i] = $resume->display($resume_id->resume_id);
                $i++;
            }
            return view("taojianzhi/save",['job_gets'=>$gets_job,'resume_gets'=>$resumes]);
        }else{
            return view("taojianzhi/save",['job_gets'=>$gets_job,'resume_gets'=>$gets_resume]);
        }
    }
    public function finish($company_name,$name)
    {
        //dd($company_name);
        $userId=DB::table('users')->where('nickname',Session::get('username'))->first()->id;
        $job_id=DB::table('tjz_jobs')->where('company_name',$company_name)
            ->where('name',$name)
            ->first()->id;
        DB::table('job_apply')->where('job_id',$job_id)->where('user_id',$userId)->update(array('status'=>1));
        return redirect()->to('personal_center');
    }
}
