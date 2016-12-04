<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class job_buy extends Model {

	protected  $table='job_buy';
    protected  $fillable=['user','company','routes','job'];

}
