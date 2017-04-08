<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\job2;
use App\company;

class IndexController extends Controller {

    public function  index()
    {
        $role_id=null;
        $inputs=DB::table("companys")->paginate(4);
        $time=array();
        $length=count($inputs);
        $username=Session::get('username');
        if($username)
        {
            $role_id=DB::table('users')->where("nickname",$username)->first()->role_id;
            //dd($role_id);
        }
       for($i=0;$i<$length;$i++)
       {
           $get=explode(" ",$inputs[$i]->created_at);
           $time[$i]=$get[0];
           $inputs[$i]->created_at=$time[$i];
       }
       //dd($inputs);
       //dd($time);
        return view("taojianzhi/index",["inputs"=>$inputs,"role_id"=>$role_id]);
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
        $gets=DB::table("companys")->where("name","like","%".$name."%")->get();
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
    public function announce($role_id)
    {
        if (!(Session::get("username")))
        {
            return redirect()->to("login");
        }
        if($role_id==1)
        {
            return view("taojianzhi/announce");
        }
        if($role_id==2)
        {
            return redirect()->to('register');
        }
    }
    public function company_announce()
    {
        return view("taojianzhi/company_announce");
    }
    public function company_announce_check(Request $request)
    {
        //$file=$request->file("myfile");
        //$tmpName = $file ->getFileName();
        //$clientName = $file -> getClientOriginalName();
        //$path = $file -> move('public/uploadfiles',$clientName);
       // $input['file_routrs']=$path;
        $input['name']=$request->get('name');
        //$input['time']=$request->get('time');
        $input['type']=$request->get('type');
        //$input['number']=$request->get('number');
        $input['salary']=$request->get('salary');
        $input['company_name']=$request->get('companyName');
        $input['address']=$request->get('CompanyAddr');
        $input['description']=$request->get('intro');
        $input['contact_person']=$request->get('Contacts');
        $input['contact']=$request->get('phone');
        $input['city']=$request->get('Province');
        //dd($input2['city']);
        $input2['name']=$input['company_name'];
        $input2['contact_person']=$input['contact_person'];
        $input2['contact']=$input['contact'];
        company::create($input2);
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
