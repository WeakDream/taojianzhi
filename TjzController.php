<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\company;
use Illuminate\Http\Request;
//use Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\CompanyAnnounceRequest;
use Hash;
use DB;
class TjzController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(){
		$inputs=DB::select('select * from companys');
    	return view('taojianzhi/index',compact('inputs'));
	}

    public function indexController(){

    }

    public function login(){
    	$m=null;
    	return view('taojianzhi/login',compact('m'));
    }

    public function login_check(Request $request){
    	$userName=$request->get('username');
    	$userPassword=$request->get('password');
    	/*if(Hash::needsRehash($userPassword)){
    		$userPassword=Hash::make(Request::get('password'));
    	}*/
    	//dd(Crypt::decrypt($userPassword));
    	$userNameCheck=DB::select('select * from users where nickname=?',[$userName]);
    	if(!$userNameCheck){
    		$m='用户名错误';
    		return view('taojianzhi/login',compact('m'));
    	}
    	else{
    	$userPasswordCheck=DB::select('select password from users where nickname =?',[$userName]);
    	$bool=Hash::check($userPassword,$userPasswordCheck[0]->password);
    	}
    	if(!$bool){
    		$m='密码错误';
    		//echo 'mimacuowu';
    		return view('taojianzhi/login',compact('m'));
    	}
    	//dd($userNameCheck[0]->id);
    	$data=$userNameCheck[0]->id;
    	return view('taojianzhi/personal_center',compact('data'));
    }

    public function register(){
    	return view('taojianzhi/register');
    }

    public function register_check(UserRequest $request){
    	$m=null;
    	$input=$request->all();
    	$input['sex']=1;
        $input['phone']=null;
        $input['password']=Hash::make(($input['password']));
        $input['sign']="null";
        $input['birthday']=date('y-m-d',time());
        $input['avatar']=null;
        $input['location']="null";
        $input['company_id']=null;
        $input['email_verified']=1;
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
    		DB::insert('insert into users (id,email,phone,password,nickname,avatar,sign,birthday,location,sex,company_id,email_verified) values(?,?,?,?,?,?,?,?,?,?,?,?)',[ '',$email,$phone,$userPassword,$userName,$avatar,$sign,$birthday,$location,$sex,$company_id,$email_verified]);
    	    return view('taojianzhi/login');
    	}
    	else{
    		$message='两次密码不一致';
    		return view('taojianzhi/register',compact('message'));
    	}*/
    }

    public function personal_center(){
    	return view('taojianzhi/personal_center');
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

    public function person_announce(){
    	return view('taojianzhi/person_announce');
    }

    public function company_announce_check(CompanyAnnounceRequest $request){
        $input['name']=$request->get('companyName');
        $input['url']='taojianzhi.com';
        $input['address']=$request->get('CompanyAddr');
        $input['logo']=null;
        $input['description']=$request->get('intro');
        $input['contact_person']=null;
        $input['contact']=$request->get('phone');
        //dd(DB::select('select * from users where id=?',[1]));
        company::create($input);
        //return view('taojianzhi/index');
        return redirect('index');

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
