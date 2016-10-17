<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\job2;
use App\User;
use App\company;
use App\job;
use App\filtration;
use App\search;
use Illuminate\Http\Request;
//use Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\CompanyAnnounceRequest;
use App\Http\Requests\JobRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class TjzController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(){
        //$test=new\App\company();
		$inputs=DB::table('jobs')->paginate(8);
    	return view('taojianzhi/index',compact('inputs'));
       // $inputs=$test->where('id','=',1)->first();
        //dd($inputs->logo);
	}

    public function indexController(){

    }

    public function login(){
    	$m=null;
    	return view('taojianzhi/login',compact('m'));
    }

    public function logout(){
    	Session::flush();
    	//dd(Session::all());
    	return redirect('index');
    }
    public function login_check(Request $request){
    	$userName=$request->get('username');
    	$userPassword=$request->get('password');
    	/*if(Hash::needsRehash($userPassword)){
    		$userPassword=Hash::make(Request::get('password'));
    	}*/
    	//dd(Crypt::decrypt($userPassword));
    	$userNameCheck=DB::select('select * from users where email=?',[$userName]);
    	if(!$userNameCheck){
    		$m='用户名错误';
    		return view('taojianzhi/login',compact('m'));
    	}
    	else{
    	$userPasswordCheck=DB::select('select password from users where email =?',[$userName]);
    	$bool=Hash::check($userPassword,$userPasswordCheck[0]->password);
    	}
    	if(!$bool){
    		$m='密码错误';
    		//echo 'mimacuowu';
    		return view('taojianzhi/login',compact('m'));
    	}
    	//dd($userNameCheck[0]->id);
    	$data=$userNameCheck[0]->id;
    	$id=$userNameCheck[0]->company_id;
    	$nickname=$userNameCheck[0]->nickname;
    	Session::put('uid',$data);
    	Session::put('username',$nickname);
    	Session::put('cid',$id);
    	if($id==2){
    	     return view('taojianzhi/personal_center',compact('data'));
    	}
    	else if($id==1){
    		return view('taojianzhi/Seller_Center');
    	}
    }

    public function register(){
    	return view('taojianzhi/register');
    }

    public function register_check(UserRequest $request){
    	$m=null;
    	$input['email']=$request->get('email');
    	$input['nickname']=$request->get('nickName');
    	$input['sex']=1;
        $input['phone']=null;
        $input['password']=Hash::make($request->get('password'));
        $input['sign']="null";
        $input['birthday']=date('y-m-d',time());
        $input['avatar']=null;
        $input['location']="null";
        $input['company_id']=$request->get('maijia');
        $input['email_verified']=1;
        //dd($input);
        User::create($input);
        return view('taojianzhi/login',compact('m'));
    	/*$userName=Request::get('nickName');
    	$email=Request::get('email');
    	$userPassword=Request::get('password');
    	$userPasswordCheck=Request::get('checkpassword');
    	if($userPassword==$userPasswordCheck){
    		$userPassword=Hash::make($userPassword);
    		$phone=null;
    		$avatar='null';
    		$sign='null';
    		$birthday=date('Y-m-d',time());
    		$location='null';
    		$sex=1;
    		$company_id=1;
    		$email_verified=1;
    		DB::insert('insert into users (id,email,phone,password,nickname,avatar,sign,birthday,location,sex,company_id,email_verified) values(?,?,?,
    	    ?,?,?,?,?,?,?,?,?)',[ '',$email,$phone,$userPassword,$userName,$avatar,$sign,$birthday,$location,$sex,$company_id,$email_verified]);
    	    return view('taojianzhi/login');
    	}
    	else{
    		$message='两次密码不一致';
    		return view('taojianzhi/register',compact('message'));
    	}*/
    }

    public function personal_center(){
    	$data=Session::get('uid');
    	//return view('taojianzhi/personal_center',compact('data'));
    	//dd(Session::get('cid'));
    	if(Session::get('cid')==1){
    		return view('taojianzhi/Seller_Center');
    	}
    	else if(Session::get('cid')==2){
    	return view('taojianzhi/personal_center',compact('data'));
    	}
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

    public function announce(){
    	return view('taojianzhi/announce');
    }

	public function company_announce(){
		return view('taojianzhi/company_announce');
	}

    public function person_announce($id){
           $data=$id;
    	return view('taojianzhi/person_announce',compact('data'));
    }
    public function  person_announce_check($id,JobRequest $request)
    {
        $data=$id;
       $data1=$request->all();
       $data1['uid']=$id;
       $time=array();
        for($j=0;$j<15;$j++)
            $time[$j]=0;
        $i=0;
        $long=strlen($data1['work_time']);
        for($i=0;$i<$long;$i=$i+12)
        {
            $value=$data1['work_time'][$i]*10+$data1['work_time'][$i+1];
            $time[$value-7]=1;

        }
       $data1['work_time']=serialize($time);
//        print_r($data);
        $fill=new \App\job( );
        $fill->complete($data1);
        return view('taojianzhi/person_announce',compact('data'));
    }
    public function time($id)
    {
        $time = time();
        $month = date('m',$time);

        if($month=='01'||$month=='03'||$month=='05'||$month=='07'||$month=='08'||$month=='10'||$month=='12')
        {
            for($i=0;$i<31;$i++)
            {
                $day[$i]=$i+1;
            }
        }
        else if($month=='02')
        {
            for($i=0;$i<28;$i++)
            {
                $day[$i]=$i+1;
            }
        }
        else   {
            for($i=0;$i<30;$i++)
            {
                $day[$i]=$i+1;
            }
        };

        $data=array();
        $data1=array();
        $data['id']=$id;
        $data['month']=$month;
        $data['day']=$day;
        $fill=new \App\time_2016( );
       $data1= $fill->display($id);
        $plan=unserialize($data1[0]['time']);
        $data['time']=$plan;
        $hour=array();
        for($i=0;$i<15;$i++)
        {
            $hour[$i]=$i;
        }
        $data['hour']=$hour;
        return view('taojianzhi/zhanshi',compact('data'));
    }

    public function resume($id){
        $fill=new \App\resume_TJZ( );
        $data=array();
        $data=$fill->display($id);
        return view('taojianzhi/resume',compact('data'));
    }
    public function company_announce_check(CompanyAnnounceRequest $request){
        $file=$request->file('myfile');
       // dd($file);

       // $test=$file -> isValid();
       // dd($test);
        $tmpName = $file ->getFileName();
        $clientName = $file -> getClientOriginalName();
       // dd($clientName);
        //dd($tmpName);
        $realPath = $file -> getRealPath();
        $entension = $file -> getClientOriginalExtension();
        $mimeTye = $file -> getMimeType();
        $path = $file -> move('public/uploadfiles',$clientName);
       // $input['file_name']=$tmpName;
        $input['file_routrs']=$path;
       // $input['picture']=$request->get('myfile');
        $input['name']=$request->get('name');
        $input['time']=$request->get('time');
        $input['work_type']=$request->get('type');
        $input['number']=$request->get('number');
        $input['salary']=$request->get('salary');
        $input['company_name']=$request->companyName;
        //$input['url']='taojianzhi.com';
        $input['address']=$request->get('CompanyAddr');
        //$input['logo']=null;
        $input['description']=$request->get('intro');
        $input['contact_person']=$request->get('Contacts');
        $input['contact']=$request->get('phone');
        //dd(DB::select('select * from users where id=?',[1]));
        job2::create($input);
        //return view('taojianzhi/index');
        return redirect('index');

    }
    public function  resume_complete($id,Request $request)
    {
        $fill=new \App\resume_TJZ( );
        $data=$request->all();
       echo $id;
         $data['uid']=$id;
        $fill->complete($data);
    }
    public function job_buy(){
    	$id=3;
        if($id==null){
        	$id=3;
        }
        $outputs=job::find($id);
        $time=array();
        $time=unserialize($outputs['work_time']);
        $i=0;
        $z=0;
        $time1=array();
        for($i=0;$i<15;$i++)
        {
            if($time[$i]==1)
            {
                $j=$i+7;
                  while($i<15)
                  {
                      if($time[$i]==1&&$i<14)
                          $i=$i+1;
                      else break;
                  }
                $p=$i+7;
                $time1[$z]=$j.":00~".$p.":00";
                $z++;
            }
        }
        $outputs['work_time']=$time1;
    	return view('taojianzhi/job_buy',compact('outputs'));
    }
    public function company_job_buy($name)
    {
        $job=new\App\job2();
        $outputs=$job->where('company_name','=',$name)->first();
        return view('taojianzhi/job_buy',compact('outputs'));
    }

    public function shopping_car(){
    	return view('taojianzhi/shopping_car');
    }

    public function shopping_car_check(){
    	/*$request=Request::get('select');
    	if($request){
    	$array=array_keys($request);
    	}
    	else{
    		$array=null;
    	}
    	if($array){
        foreach($array as $i){
        	DB::insert('insert into shopping_car (id,uid,cid) values(?,?,?)',[$i,$i,$i]);
        	DB::insert('insert into job_check (id,cid) values(?,?)',[$i,$i]);
        }
    }*/
        return view('taojianzhi/job_check');
    }

    public function job_check(){
    	return view('taojianzhi/job_check');
    }
    public function gongsi_save($name)
    {

        $job2=new \App\job2();
        $company=$job2->where("company_name","=",$name)->first();
        return view('taojianzhi/personal_center',compact('company'));
    }

	public function seller_center(){
    	return view('taojianzhi/Seller_Center');
    }

    public function filtration(filtration $request){

    }

    public function search(){
    	return view('taojianzhi/search');
    }

    public function search_handle(Request $request){
    	$search=new \App\search();
    	$key=$request->get('key');
    	$b=array("/，/","/。/","/；/");
 	    $c=array(",",".",";");
 	    //dd($key);
    	if($key){
    	 $get=preg_replace($b,$c,$key);
 	     $node="/[\s , . ;]/";
 	     $split=preg_split($node,$get);
    	 $result=$search->search($get);
    	 //dd($result[0]->name);
    	 if(isset($result[0])){
    	 	//dd($result);
    	     return view('taojianzhi/search',compact('result'));
    	 }
    	 else{
    	 	$message='not found!';
    		return view('taojianzhi/search',compact('message'));
    	 }
    	}
    	else{
    		return redirect('search');
    	}
    }
    public function company($name)
    {
        $job2=new \App\job2();
      $company=$job2->where("company_name","=",$name)->first();
        //dd($company->file_routrs);
        return view('taojianzhi/gongsi',compact('company'));
       // return view('taojianzhi/company');
    }
    public function follow_search(Request $request)
    {
        $m=null;
        $test=new\App\filtration();
        $name=$request->i_key;
        if($name==null)
        {
            return redirect('index');
        }
        $gets=$test->search($name);
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
     



	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
    
}
