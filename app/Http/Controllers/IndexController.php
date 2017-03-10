<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\job2;

class IndexController extends Controller {

    public function  index()
    {
        $inputs=DB::table("jobs")->paginate(8);
        $time=array();
        $length=count($inputs);
       for($i=0;$i<$length;$i++)
       {
           $get=explode(" ",$inputs[$i]->created_at);
           $time[$i]=$get[0];
           $inputs[$i]->created_at=$time[$i];
       }
       //dd($inputs);
       //dd($time);
        return view("taojianzhi/index",["inputs"=>$inputs]);
	}
    public function search(Request $request)
    {
        $m=null;
        //$test=new \App\filtration();
        $name=$request->i_key;
        if($name==null)
        {
            return redirect('index');
        }
        //$gets=$test->search($name);
        $gets=DB::table("jobs")->where("company_name","like","%".$name."%")->get();
        if(!$gets)
        {
            $m=null;
        }
        else
        {
            $m=$gets;
        }
        return view('taojianzhi/index',compact('m'));
    }
    public function announce()
    {
        if (!(Session::get("username")))
        {
            return redirect()->to("login");
        }
        return view ("taojianzhi/announce");
    }
    public function company_announce()
    {
        return view("taojianzhi/company_announce");
    }
    public function company_announce_check(Request $request)
    {
        $file=$request->file("myfile");
        //$tmpName = $file ->getFileName();
        $clientName = $file -> getClientOriginalName();
        $path = $file -> move('public/uploadfiles',$clientName);
        $input['file_routrs']=$path;
        $input['name']=$request->get('name');
        $input['time']=$request->get('time');
        $input['work_type']=$request->get('type');
        $input['number']=$request->get('number');
        $input['salary']=$request->get('salary');
        $input['company_name']=$request->companyName;
        $input['address']=$request->get('CompanyAddr');
        $input['description']=$request->get('intro');
        $input['contact_person']=$request->get('Contacts');
        $input['contact']=$request->get('phone');
        job2::create($input);
        return redirect('index');
    }
    public function person_announce()
    {
        return view ("taojianzhi/person_announce");
    }
    public function person_announce_check()
    {
        echo "<p style='font-size: 20px;text-align: center'>该功能还没有完成,程序员哥哥正在加班当中，请等待。。。。。。。</p>";
    }
}
