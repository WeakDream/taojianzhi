<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class job_buy extends Model {

	protected  $table='user_company';
    protected  $fillable=['user_name','company_name','routes','job'];

}
