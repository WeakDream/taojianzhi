<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class company_save extends Model {

    protected $table='company_save';
    protected $fillable=['user_id','company_id','company_name'];

}
