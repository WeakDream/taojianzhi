<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class job2 extends Model {
protected  $table='tjz_jobs';
    protected $fillable = ['company_name','url','address','description','contact_person','contact',
    'file_name','file_routrs','work_type','time','salary','name','number','type','city'];
    protected $hidden = ['remember_token'];
}
