<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resume_save extends Model
{
    protected $table = 'resume_save';
    public $timestamps = false;
    protected $fillable = ['resume_id','user_id'];
    protected $hidden=['remember_token'];
    public function getUser($resume_id){
        return $this->where('resume_id',$resume_id)->get();
    }
    public function getResume($user_id){
        return $this->where('user_id',$user_id)->get();
    }
    public function saveCollect($data){
        $this->fill($data);
        $this->save();
        return 0;
    }
    public function removeCollect($resume_id,$user_id){
        return $this->where(['user_id'=>$user_id,'resume_id'=>$resume_id])->delete();
    }
    public function collectionExist($resume_id,$user_id){
        $get=$this->where(['resume_id'=>$resume_id,'user_id'=>$user_id])->first();
        if(!$get){
            return false;
        }else{
            return true;
        }
    }
}
