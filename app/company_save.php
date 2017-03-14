<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class company_save extends Model {

    protected $table='orders';
    protected $fillable=['user_id','job_name','applicant_name','recruiter_name'];

}
