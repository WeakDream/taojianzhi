<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class job2 extends Model {
protected  $table='tjz_jobs';
    protected $fillable = ['company_name','url','position','description','contact_person','contact',
    'file_name','file_routrs','work_type','time','salary','name','number','job_type','city','creator_id','creator_name',"start_time","during_time","work_time"];
    protected $hidden = ['remember_token'];
}
