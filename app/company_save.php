<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class company_save extends Model {

    protected $table='job_save';
    protected $fillable=['username','jobname','companyname'];

}
