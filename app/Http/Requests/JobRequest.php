<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class JobRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            "name"=>"required",
            "price"=>'required',
            'wage'=>'required',
            'count'=>'required',
            'place'=>'required',
            //'jobCityName'=>'required',
            'start_time'=>'required',
            'during_time'=>'required',
            'work_time'=>'required',
            'duty'=>'required',
            'requirement'=>'required'
        ];
    }

}
