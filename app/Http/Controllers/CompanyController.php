<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\job2;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\job_buy;
use App\company_save;

class CompanyController extends Controller {

	public function company($name)
    {
        $company=DB::table("tjz_jobs")->where("company_name",$name)->first();
        //dd($company);
        return view("taojianzhi/company",["company"=>$company]);
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
            $inputs['user_name']=Session::get('username');
            //$inputs['user']="77777";
            //$inputs['job']=$request->get('job');
            $inputs['company_name']=$request->get('company');
            $password=$request->get("password");
            $userPasswordCheck=DB::select('select password from users where nickname =?',[$inputs['user_name']]);
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
    public function job_save($name)
    {

        $job2=new \App\job2();
        $company=$job2->where("company_name","=",$name)->first();

        if($username=session::get('username'))
        {
            $company_save = new company_save();
            $company_save->applicant_name=$username;
            //$company_save->company_id=$company->id;
            $company_save->recruiter_name=$name;
            $saved_company = $company_save->where("applicant_name","=",$username)->get();
            foreach ($saved_company as $temp)
            {
                if($temp->company_name == $name) //已经收藏
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


}
