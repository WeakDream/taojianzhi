<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class user_logs extends Model {

	protected $table='user_logs';
	protected $fillable=['company_name','user'];

}
