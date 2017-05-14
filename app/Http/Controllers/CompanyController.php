<?php namespace App\Http\Controllers;

use App\comments;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\job2;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\job_buy;
use App\company_save;
use App\user_logs;

class CompanyController extends Controller {
    public function info($name)
    {
        $company=DB::table("tjz_jobs")->where("company_name",$name)->first();
        $company->work_time=str_replace('@'," ",$company->work_time);
        //dd($company);
        $company_name=$company->company_name;
        $username=Session::get('username');
        $comments=DB::table('comments')->where("companyname",$name)->get();
        if(!Session::get('username')) {
            return view("taojianzhi/job_info", ["company" => $company,'comments'=>$comments]);
        }
        $logs=DB::table('user_logs')->where('company_name',$name)->where('user',$username)->first();

        if($logs)
        {
            //date_default_timezone_set("Asia/Shanghai");
            $time=date('y-m-d H:m:s',time());
            //dd($time);
            //dd($time);
            $id=$logs->id;
            DB::table('user_logs')->where('id',$id)->update(["created_at"=>$time]);
        }
        else
        {

            user_logs::create(['company_name' => $company_name, 'user' => $username]);
        }
        return view("taojianzhi/job_info",["company"=>$company,"comments"=>$comments]);
    }
    public function buy($name)

    {
        if(!(Session::get("username")))
        {
            return redirect()->to("login");
        }
        $gets=DB::table("tjz_jobs")->where("company_name",$name)->first();
        return view ("taojianzhi/pay",["outputs"=>$gets]);
    }
    public function pay(Request $request)
    {
        {
            $user_name=Session::get('username');
            $company=$request->get('company');
            $job=$request->get('job');
            $inputs['user_id']=DB::table('users')->where('nickname',$user_name)->first()->id;
            $inputs['job_id']=DB::table('tjz_jobs')->where('company_name',$company)
                                                        ->where('name',$job)
                                                        ->first()->id;
            $inputs['creator_id']=DB::table('tjz_jobs')->where('company_name',$company)
                ->where('name',$job)
                ->first()->creator_id;
            $inputs['resume_id']=DB::table('resumes')->where('user_id',$inputs['user_id'])->first()->id;
            $password=$request->get("password");
            $userPasswordCheck=DB::select('select password from users where nickname =?',[$user_name]);
            //$bool=Hash::check($password,$userPasswordCheck[0]->password);
            if($password==$userPasswordCheck[0]->password)
            {
                job_buy::create($inputs);
                return response()->json(["state"=>"success"]);

            }
            else
            {
                return response()->json(["state"=>"false"]);

            }
        }

    }
    public  function pay_success()
    {
        return view("taojianzhi/pay_success");
    }
    public function job_save($name,$jobname)
    {

        $job2=new \App\job2();
        $company=$job2->where("company_name","=",$name)->first();

        if($username=session::get('username'))
        {
            $company_save = new company_save();
            $company_save->username=$username;
            //$company_save->company_id=$company->id;
            $company_save->companyname=$name;
            $company_save->jobname=$jobname;
            $saved_company = $company_save->where("username","=",$username)->get();
            foreach ($saved_company as $temp)
            {
                if($temp->companyname == $name && $temp->jobname==$jobname) //已经收藏
                {
                    return redirect()->to('index');
                }
            }
            if($company_save->save())
            {
                return redirect()->to('personal_center');
            }

        }else{
            return redirect()->to('login');
        }
    }
    public function job_delete($name,$jobname)
    {
        $username=session::get('username');
        DB::table("job_save")->where('username',$username)->where('companyname',$name)->where('jobname',$jobname)->delete();
        return redirect()->to('save');
    }
    public function comments(Request $request)
    {
        $input["companyname"]=$request->get("companyname");
        //dd($input);
        $input["username"]=$request->get("username");
        $input["comment"]=$request->get("comments");
        $input["name"]=$request->get("name");
        $userId=DB::table('users')->where('nickname',$input['username'])->first()->id;
        $input['job_id']=DB::table('tjz_jobs')->where('company_name',$input["companyname"])
            ->where('name',$input["name"])
            ->first()->id;
        $get=DB::table('job_apply')->where('job_id',"=",$input['job_id'])->where('user_id',"=",$userId)->first();
        if(empty($get))
        {
            //return redirect()->back()->with(["comment"=>0]);
            //return redirect()->to('index');
            return response()->json(['comment'=>0]);
        }
        else
        {
            if($get->status==0)
            {
                //return redirect()->back()->with(["comment"=>1]);
                return response()->json(['comment'=>1]);
            }
            else
            {
                comments::create($input);
                return response()->json(['comment'=>2]);
            }
        }

    }

}
