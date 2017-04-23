<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class search extends Model {

	//
    protected $table='jobs';

    public function search($key){
    	$result=$this->where('name','like','%'.$key.'%')->get();
    	return $result;
    }
}
