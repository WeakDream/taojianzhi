<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\resume_TJZ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
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
    public function personal_resume($user_name)
    {
        $UserId = Session::get("UserId");
        $user_data=DB::table("users")->where("nickname",$user_name)->first();
        $resume=DB::table("resumes")->where("user_id",$user_data->id)->first();
        $evaluates=DB::table("user_evaluates")->where("target_id",$UserId)->first();
        //dd($evaluates);
        if(!$this->is_login())
        {
            return redirect()->to("login");
        }
        return view ("taojianzhi/resume",compact('user_data','resume','evaluates'));
    }
    public function complate_personal_resume()
    {
        return view ("taojianzhi/complate_resume");
    }
    public function complate_resume(Requests\ResumeRequest $request){
        if(Session::get('resume_state')==1){
            return redirect()->to("personal_center");
        }
        $UserName=Session::get("username");
        $get_user=DB::table("users")->where("nickname",$UserName)->first();
        $UserId = $get_user->id;
        $user_phone=$get_user->phone;
        $resume = new resume_TJZ();
        $file = $request->file('user_head');
        $entension = $file->getClientOriginalExtension();
        $newName = $UserId."face".".".$entension;
        $path = $file -> move('public/facebook',$newName);
        $save_path='/public/facebook/'.$newName;
        $user_data=$request->all();
        //dd($user_data);
        $user_data['photo']=$save_path;
        if($user_data['reg'] == "student"){
            $user_data['school']=$request->get('school');
        }elseif ($user_data['reg'] == "rencai"){
            $user_data['school']=$request->get('xueli');
        }
        //$user_data['school']=null;//搞啥？
        $user_data['contact']=$user_phone;//联系电话
        $user_data['city']=$request->get('Province').$request->get('City').$request->get('Area');
        $user_data['expect_location']=$request->get('EProvince').$request->get('ECity').$request->get('EArea');
        $user_data['user_id']=$UserId;
        //dd($user_data);
        $resume->complete($user_data);
        Session::put('resume_state',1);
        return redirect()->route("resume",['user_name'=>$UserName]);
    }
    public function update_user_head(Request $request)
    {
        $UserName=Session::get("username");
        $user_data=DB::table("users")->where("nickname",$UserName)->first();
        // dd($UserName);
        $get_user=DB::table("users")->where("nickname",$UserName)->first();
        $UserId = $get_user->id;
        $file = $request->file('user_head');
        //dd($file);
        $entension = $file->getClientOriginalExtension();
        $newName = $UserId."face".".".$entension;
        $path = $file -> move('public/facebook',$newName);
        $save_path='/public/facebook/'.$newName;
        //dd($save_path);
        DB::table('resumes')->where('user_id',$user_data->id)->update(array('photo'=>$save_path));
        //dd($g);
        return redirect()->route("resume",['user_name'=>$UserName]);
    }
}