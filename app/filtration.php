<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class filtration extends Model {

	//
	protected $table='jobs';
   public function search($key)
   {
	   $result=$this->where('company_name','like','%'.$key.'%')->get();
	   return $result;
   }
	   
}
