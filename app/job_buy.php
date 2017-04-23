<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class job_buy extends Model {

	protected  $table='job_apply';
    protected  $fillable=['user_id',"job_id",'creator_id','resume_id','status'];

}
