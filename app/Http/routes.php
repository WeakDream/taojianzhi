<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get("/",function (){
    return view("welcome");
});
//用户的登录注册部分
Route::get("register","UserController@register");
Route::post("register_check","UserController@register_check");
Route::get("login","UserController@login");
Route::post("login_check","UserController@login_check");
Route::get("logout","UserController@login_out");
Route::get("forgetPassword","UserController@forgetPassword");

//网站的首页部分以及一些功能
Route::get("index","IndexController@index");
Route::post("index_company_search","IndexController@search");
Route::get("announce","IndexController@announce");
Route::get("self_more","IndexController@self_more");
Route::get("company_more","IndexController@company_more");
Route::get('announce',"IndexController@announce");
Route::get("company_announce","IndexController@company_announce");
Route::post("company_announce_check","IndexController@company_announce_check");
Route::get("person_announce","IndexController@person_announce");
Route::post("person_announce_check","IndexController@person_announce_check");
Route::get("information/{bigName}","IndexController@getPersonInformation");


//用户的个人中心部分
Route::get("personal_center","PersonalController@personal_center");
Route::get("logs_delete/{company_name}","PersonalController@logs_delete");
Route::get("save",'PersonalController@save');
Route::get('finish/{company_name}/{name}',"PersonalController@finish");

//用户的简历部分
Route::get("complate_personal_resume","ResumeController@complate_personal_resume");//跳转页面
Route::post("complate_resume","ResumeController@complate_resume");
Route::post("update_user_head","ResumeController@update_user_head");
Route::get("resume/{user_name}",['as'=>'resume','uses'=>'ResumeController@personal_resume']);
Route::post("information/{bigName}/resumeCollect",['as'=>'resumeCollect','uses'=>'ResumeController@resumeSave']);
Route::get("information/{bigName}/removeCollect","ResumeController@removeCollection");

//收藏与交易的部分
Route::get("info/{name}","CompanyController@info");
//Route::get("company/{name}/hello",function ()
//{
  //  return "hello";
//});//对路由的一个测试
Route::get("job_buy/{name}","CompanyController@buy");
Route::post("job_buy/pay","CompanyController@pay");
Route::get("pay_success","CompanyController@pay_success");
Route::get("job_save/{name}/{jobname}","CompanyController@job_save");
Route::get("job_delete/{name}/{jobname}","CompanyController@job_delete");
Route::get("sendsuccess","SendEmailController@sendsuccess");
Route::get("comments","CompanyController@comments");
Route::get("back",function ()
{
    return redirect()->back();
});

//卖家的简历处理，目前邮箱的通知部分是写死的
Route::post("send","SellerController@send_email");

Route::get('import','SellerController@import');









Route::post('delete_save_job','CompanyController@delete_save_job');

Route::get('resume',function (){
    return view('taojianzhi/resume');
});












