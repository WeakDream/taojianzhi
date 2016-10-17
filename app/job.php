<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model {

	//
	protected $table='job';
	protected $fillable = ['id','uid','name','price','wage','count','place','start_time','during_time','work_time','duty','requirement'];
    protected $hidden = ['remember_token'];

    public function complete($data){
        $this->fill($data);
        $this->save();
        return 0;
    }
}
