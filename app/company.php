<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model {

	//
 protected $table='companys';
 protected $fillable = ['name','url','address','logo','description','contact_person','contact'];
 protected $hidden = ['remember_token'];

}
